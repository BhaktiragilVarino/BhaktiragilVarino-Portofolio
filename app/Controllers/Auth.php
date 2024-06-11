<?php

namespace App\Controllers;

use App\Models\Model_auth;
use Picqer\Barcode\BarcodeGeneratorPNG;

class Auth extends BaseController
{
    private $Model_auth;
    public function __construct()
    {
        helper('form');
        $this->Model_auth = new Model_auth();
    }

    public function index()
    {
        $data = array(
            'title' => 'My Portofolio',
        );

        echo view('v_lp', $data);
    }

    public function daftar()
    {
        $data = array(
            'title' => 'Sign Up',
        );

        echo view('v_signup', $data);
    }

    public function formlogin()
    {
        $data = array(
            'title' => 'Login',
        );

        echo view('v_login', $data);
    }

    public function lupapw()
    {
        $data = array(
            'title' => 'Lupa PW',
        );

        echo view('v_lupapw', $data);
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

            if ($this->Model_auth->where('username', $datauser['username'])->first() !== null) {
                session()->setFlashdata('errors', 'Username sudah digunakan');
                return redirect()->to(base_url('auth/daftar'));
            }
            $this->Model_auth->insert_auth($datauser);
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('auth/formlogin'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', 'Harap Isi Semua Data');
            return redirect()->to(base_url('auth/daftar'));
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

    public function login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]

        ])) {
            //jika valid
            $password_salt = '72932aJAsjnaknsa892132';
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $username_hash = hash('sha256', $password_salt . $username . $password_salt);
            $password_hash = hash('sha256', $password_salt . $password . $password_salt);

            $cek = $this->Model_auth->login($username_hash, $password_hash);
            if ($cek) {
                //jika datanya cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);
                session()->set('notelepon', $cek['notelepon']);
                session()->set('email', $cek['email']);
                session()->set('alamat', $cek['alamat']);
                session()->set('foto', $cek['foto']);
                session()->set('barcode', $cek['barcode']);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('errors', 'Username & Passwordmu Salah !!!');
                return redirect()->to(base_url('auth/formlogin'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('info', 'Isi Semua Data');
            return redirect()->to(base_url('auth/formlogin'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('level');
        session()->remove('notelepon');
        session()->remove('email');
        session()->remove('alamat');
        session()->remove('foto');
        session()->remove('barcode');

        session()->setFlashdata('pesan', 'Anda Sudah Logout Dari Aplikasi !!!');
        return redirect()->to(base_url('lp'));
    }
}
