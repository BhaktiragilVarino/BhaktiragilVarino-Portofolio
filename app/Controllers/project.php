<?php

namespace App\Controllers;

use App\Models\Model_project;

class project extends BaseController
{
    private $model_project;
    private $pager;

    public function __construct()
    {
        $this->model_project = new Model_project();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $project = $this->model_project;

        if (!empty($keyword)) {
            $project = $project->like('kategori_project', $keyword)
                ->orLike('nama_project', $keyword)
                ->orLike('keterangan_project', $keyword);
        }

        $data = [
            'title' => 'List Data Work Experience',
            'project' => $project->paginate(10, 'project'),
            'pager' => $this->pager,
            'isi' => 'data/master/project/v_list'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data project',
            'isi' => 'data/master/project/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        // Mengambil data proyek dari request
        $data = [
            'id_project' => $this->request->getPost('id_project'),
            'kategori_project' => $this->request->getPost('kategori_project'),
            'nama_project' => $this->request->getPost('nama_project'),
            'keterangan_project' => $this->request->getPost('keterangan_project')
        ];

        // Mengambil file foto_project dari request (bisa lebih dari satu)
        $fotos = $this->request->getFiles();

        // Inisialisasi array untuk menyimpan nama file foto yang diunggah
        $fotoNames = [];

        // Memeriksa dan memproses setiap file yang diunggah
        if ($fotos !== null && isset($fotos['foto_project'])) {
            foreach ($fotos['foto_project'] as $foto) {
                if ($foto->isValid() && !$foto->hasMoved()) {
                    $newName = $foto->getRandomName();
                    $foto->move('upload_foto', $newName);
                    $fotoNames[] = $newName; // Menyimpan nama file yang diunggah
                }
            }
        }

        // Menyimpan nama file foto dalam data proyek jika ada foto yang diunggah
        if (!empty($fotoNames)) {
            $data['foto_project'] = implode(',', $fotoNames); // Menggabungkan nama file dengan koma sebagai pemisah
        }

        // Memasukkan data proyek ke dalam database
        $this->model_project->insert_project($data);

        // Mengatur pesan sukses dan mengarahkan ke halaman proyek
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('project'));
    }

    public function edit($id_project)
    {
        $data = [
            'title' => 'Edit Data project',
            'project' => $this->model_project->edit_project($id_project),
            'isi' => 'data/master/project/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_project)
    {
        // Mengambil data dari POST request
        $data = [
            'kategori_project' => $this->request->getPost('kategori_project'),
            'nama_project' => $this->request->getPost('nama_project'),
            'keterangan_project' => $this->request->getPost('keterangan_project')
        ];

        // Mengambil file yang diunggah
        $fotos = $this->request->getFiles();

        // Mengambil data proyek lama
        $project = $this->model_project->edit_project($id_project);

        // Mengambil foto lama yang sudah ada
        $oldFotos = [];
        if ($project['foto_project']) {
            $oldFotos = explode(',', $project['foto_project']);
        }

        // Menghapus foto yang dipilih
        $deleteFotos = $this->request->getPost('delete_foto');
        if ($deleteFotos) {
            foreach ($deleteFotos as $deleteFoto) {
                if (($key = array_search($deleteFoto, $oldFotos)) !== false) {
                    unset($oldFotos[$key]);
                    $filePath = 'upload_foto/' . $deleteFoto;
                    if (file_exists($filePath)) {
                        unlink($filePath); // Hapus file dari server
                    }
                }
            }
        }

        // Memproses file yang diunggah
        if ($fotos !== null && isset($fotos['foto_project'])) {
            foreach ($fotos['foto_project'] as $foto) {
                if ($foto->isValid() && !$foto->hasMoved()) {
                    $newName = $foto->getRandomName();
                    $foto->move('upload_foto', $newName);
                    $oldFotos[] = $newName; // Tambahkan nama file baru ke array
                }
            }
        }

        // Menggabungkan nama file menjadi string yang dipisahkan dengan koma
        if (!empty($oldFotos)) {
            $data['foto_project'] = implode(',', $oldFotos);
        } else {
            $data['foto_project'] = null; // Atau Anda bisa mengatur nilai default jika tidak ada foto
        }

        // Memperbarui data proyek di database
        $this->model_project->update_project($data, $id_project);

        // Mengatur pesan sukses dan mengarahkan ke halaman proyek
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('project'));
    }

    public function delete($id_project)
    {
        $this->model_project->delete_project($id_project);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('project'));
    }
}
