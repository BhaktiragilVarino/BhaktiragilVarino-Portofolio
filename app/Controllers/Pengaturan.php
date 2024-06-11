<?php

namespace App\Controllers;

use App\Models\Model_pengaturan;

class pengaturan extends BaseController
{
    protected $pengaturan;
    private $Model_pengaturan;

    public function __construct()
    {
        $this->Model_pengaturan = new Model_pengaturan();
    }
    public function edit($id_user)
    {
        $data = [
            'title' => 'Edit Data profil',
            'pengaturan' => $this->Model_pengaturan->edit_pengaturan($id_user),
            'isi' => 'data/pengaturan/v_list',
        ];

        return view('layout/v_wrapper', $data);
    }
    public function edit2($id_user)
    {
        $data = [
            'title' => 'Edit Data profil',
            'pengaturan' => $this->Model_pengaturan->edit_pengaturan($id_user),
            'isi' => 'data/pengaturan/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_user)
    {
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'email' => $this->request->getPost('email'),
            'notelepon' => $this->request->getPost('notelepon'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            // Hapus foto lama jika ada
            $profil = $this->Model_pengaturan->edit_pengaturan($id_user);
            if ($profil['foto']) {
                unlink('upload_foto/' . $profil['foto']);
            }

            // Pindahkan foto baru
            $newName = $foto->getRandomName();
            $foto->move('upload_foto', $newName);
            $data['foto'] = $newName;
        }

        $this->Model_pengaturan->update_pengaturan($data, $id_user);

        session()->setFlashdata('success', 'Profil Berhasil Diupdate');
        return redirect()->to(base_url('pengaturan/edit/' . session()->get('id_user')));
    }

    public function update1($id_user)
    {
        if ($this->validate([
            'old_password' => [
                'label' => 'Password Lama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'new_password' => [
                'label' => 'Password Baru',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'confirm_password' => [
                'label' => 'Ulangi Password',
                'rules' => 'required|matches[new_password]',
                'errors' => [
                    'required' => '{field} Wajib Diisi!',
                    'matches' => '{field} tidak sesuai dengan Password Baru'
                ]
            ]
        ])) {
            $password_salt = '72932aJAsjnaknsa892132';

            $data = [
                'password' => hash('sha256', $password_salt . $this->request->getPost('new_password') . $password_salt),
            ];

            $existingUser = $this->Model_pengaturan->where('id_user', $id_user)->first();
            if ($existingUser) {
                $old_password_hash = hash('sha256', $password_salt . $this->request->getPost('old_password') . $password_salt);
                if ($existingUser['password'] !== $old_password_hash) {
                    session()->setFlashdata('errors', 'Password Lama tidak sesuai');
                    return redirect()->to(base_url('pengaturan/edit/' . session()->get('id_user')));
                }
            } else {
                session()->setFlashdata('errors', 'User tidak ditemukan');
                return redirect()->to(base_url('pengaturan/edit/' . session()->get('id_user')));
            }

            $this->Model_pengaturan->update_pengaturan($data, $id_user);
            session()->setFlashdata('success', 'Password Berhasil Di Reset');
            return redirect()->to(base_url('pengaturan/edit/' . session()->get('id_user')));
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', 'Password tidak sama. Harap periksa kembali.');
            return redirect()->to(base_url('pengaturan/edit/' . session()->get('id_user')));
        }
    }
}
