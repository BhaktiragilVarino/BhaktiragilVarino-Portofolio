<?php

namespace App\Controllers;

use App\Models\Model_user;

class user extends BaseController
{
    private $model_user;
    private $pager;

    public function __construct()
    {
        $this->model_user = new Model_user();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $user = $this->model_user->where('level', '2');

        if (!empty($keyword)) {
            $user = $user->like('nama_user', $keyword)
                ->orLike('level', $keyword)
                ->orLike('notelepon', $keyword)
                ->orLike('email', $keyword)
                ->orLike('alamat', $keyword)
                ->orLike('foto', $keyword)
                ->orLike('barcode', $keyword)
                ->orLike('created_at', $keyword);
        }

        $data = [
            'title' => 'List Data Technology Suite',
            'user' => $user->paginate(10, 'user'),
            'pager' => $this->pager,
            'isi' => 'data/user/v_list'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data User',
            'isi' => 'data/user/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'notelepon' => [
                'label' => 'No Telepon',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[tbl_user.username]',
                'errors' => [
                    'required' => '{field} Wajib Diisi !',
                    'is_unique' => '{field} sudah digunakan'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ]
        ])) {

            $password_salt = '72932aJAsjnaknsa892132';

            $datauser = [
                'id_user' => $this->request->getPost('id_user'),
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'notelepon' => $this->request->getPost('notelepon'),
                'alamat' => $this->request->getPost('alamat'),
                'level' => $this->request->getPost('level'),
                'username' => hash('sha256', $password_salt . $this->request->getPost('username') . $password_salt),
                'password' => hash('sha256', $password_salt . $this->request->getPost('password') . $password_salt)
            ];

            $foto = $this->request->getFile('foto');

            if ($foto !== null) {
                if ($foto->isValid() && !$foto->hasMoved()) {
                    $newName = $foto->getRandomName();
                    $foto->move('upload_foto', $newName);
                    $datauser['foto'] = $newName;
                }
            }

            $barcode = $this->generateBarcode();
            $datauser['barcode'] = $barcode;

            if ($this->model_user->where('username', $datauser['username'])->first() !== null) {
                session()->setFlashdata('errors', 'Username sudah digunakan');
                return redirect()->to(base_url('user/tambah'));
            }
            $this->model_user->insert_user($datauser);
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('user'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', 'Harap Isi Semua Data');
            return redirect()->to(base_url('user/tambah'));
        }
    }

    private function generateBarcode()
    {
        // Generate unique barcode (example)
        $uniqueId = uniqid(); // Mendapatkan ID unik
        $numericId = preg_replace('/\D/', '', $uniqueId); // Menghapus semua karakter non-angka

        // Jika hasilnya terlalu pendek, tambahkan angka acak untuk memastikan panjang yang cukup
        while (strlen($numericId) < 13) {
            $numericId .= rand(0, 9);
        }

        return $numericId;
    }

    public function edit($id_user)
    {
        $data = [
            'title' => 'Edit Data user',
            'user' => $this->model_user->edit_user($id_user),
            'isi' => 'data/user/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }


    public function delete($id_user)
    {
        $this->model_user->delete_user($id_user);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('user'));
    }

    public function update($id_user)
    {
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'email' => $this->request->getPost('email'),
            'notelepon' => $this->request->getPost('notelepon'),
            'alamat' => $this->request->getPost('alamat'),
            'level' => $this->request->getPost('level'),
        ];

        $foto = $this->request->getFile('foto');

        if ($foto !== null) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                // Hapus foto lama jika ada
                $user = $this->model_user->edit_user($id_user);
                if ($user['foto']) {
                    $oldFilePath = 'upload_foto/' . $user['foto'];
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Pindahkan foto baru
                $newName = $foto->getRandomName();
                $foto->move('upload_foto', $newName);
                $data['foto'] = $newName;
            }
        }

        $this->model_user->update_user($data, $id_user);


        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('user'));
    }

    public function changeusernamepassword($id_user)
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[tbl_user.username]',
                'errors' => [
                    'required' => '{field} Wajib Diisi !',
                    'is_unique' => '{field} sudah digunakan'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ]
        ])) {

            $password_salt = '72932aJAsjnaknsa892132';

            $datauser = [
                'username' => hash('sha256', $password_salt . $this->request->getPost('username') . $password_salt),
                'password' => hash('sha256', $password_salt . $this->request->getPost('password') . $password_salt)
            ];

            if ($this->model_user->where('username', $datauser['username'])->first() !== null) {
                session()->setFlashdata('errors', 'Username sudah digunakan');
                return redirect()->to(base_url('user'));
            }
            $this->model_user->update_user($datauser, $id_user);
            session()->setFlashdata('success', 'Data berhasil diUpdate');
            return redirect()->to(base_url('user'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', 'Harap Isi Semua Data');
            return redirect()->to(base_url('user/tambah'));
        }
    }
}
