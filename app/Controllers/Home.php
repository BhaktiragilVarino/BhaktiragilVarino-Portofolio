<?php

namespace App\Controllers;

use App\Models\Model_home;
use App\Models\Model_pesan;

class Home extends BaseController
{

    private $model_home;
    private $model_pesan;

    public function __construct()
    {
        $this->model_home = new Model_home();
        $this->model_pesan = new Model_pesan();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'isi' => 'v_home',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function cekdata()
    {
        $dataCount =  $this->model_home->countAllResults();

        $data = [
            'title' => 'Home',
            'home' => $dataCount > 0,
            'isi' => 'data/master/home/v_list',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Home',
            'isi' => 'data/master/home/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        // Mengambil data proyek dari request
        $data = [
            'id_home' => $this->request->getPost('id_home'),
            'nama_home' => $this->request->getPost('nama_home'),
            'minat_home' => $this->request->getPost('minat_home')
        ];

        // Mengambil file foto_project dari request (bisa lebih dari satu)
        $files = $this->request->getFiles();

        // Inisialisasi array untuk menyimpan nama file foto yang diunggah
        $fileNames = [];

        // Memeriksa dan memproses setiap file yang diunggah
        if ($files !== null && isset($files['cv_home'])) {
            foreach ($files['cv_home'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('upload_file', $newName);
                    $fileNames[] = $newName; // Menyimpan nama file yang diunggah
                }
            }
        }

        // Menyimpan nama file foto dalam data proyek jika ada foto yang diunggah
        if (!empty($fileNames)) {
            $data['cv_home'] = implode(',', $fileNames); // Menggabungkan nama file dengan koma sebagai pemisah
        }

        // Memasukkan data proyek ke dalam database
        $this->model_home->insert_home($data);

        // Mengatur pesan sukses dan mengarahkan ke halaman proyek
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('home/cekdata'));
    }

    public function edit($id_home)
    {
        $data = [
            'title' => 'Edit Data home',
            'home' => $this->model_home->edit_home($id_home),
            'isi' => 'data/master/home/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_home)
    {
        // Mengambil data dari POST request
        $data = [
            'nama_home' => $this->request->getPost('nama_home'),
            'minat_home' => $this->request->getPost('minat_home')
        ];

        // Mengambil file yang diunggah
        $files = $this->request->getFiles();

        // Mengambil data proyek lama
        $home = $this->model_home->edit_home($id_home);

        // Mengambil foto lama yang sudah ada
        $oldFiles = [];
        if ($home['cv_home']) {
            $oldFiles = explode(',', $home['cv_home']);
        }

        // Menghapus foto yang dipilih
        $deleteFiles = $this->request->getPost('delete_file');
        if ($deleteFiles) {
            foreach ($deleteFiles as $deleteFile) {
                if (($key = array_search($deleteFile, $oldFiles)) !== false) {
                    unset($oldFiles[$key]);
                    $filePath = 'upload_file/' . $deleteFile;
                    if (file_exists($filePath)) {
                        unlink($filePath); // Hapus file dari server
                    }
                }
            }
        }

        // Memproses file yang diunggah
        if ($files !== null && isset($files['cv_home'])) {
            foreach ($files['cv_home'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('upload_file', $newName);
                    $oldFiles[] = $newName; // Tambahkan nama file baru ke array
                }
            }
        }

        // Menggabungkan nama file menjadi string yang dipisahkan dengan koma
        if (!empty($oldFiles)) {
            $data['cv_home'] = implode(',', $oldFiles);
        } else {
            $data['cv_home'] = null; // Atau Anda bisa mengatur nilai default jika tidak ada foto
        }

        // Memperbarui data proyek di database
        $this->model_home->update_home($data, $id_home);

        // Mengatur pesan sukses dan mengarahkan ke halaman proyek
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('home/cekdata'));
    }

    public function deletepesan($id_pesan)
    {
        $this->model_pesan->delete_pesan($id_pesan);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('home'));
    }
}
