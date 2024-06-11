<?php

namespace App\Controllers;

use App\Models\Model_achiev;

class achiev extends BaseController
{
    private $model_achiev;
    private $pager;

    public function __construct()
    {
        $this->model_achiev = new Model_achiev();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $achiev = $this->model_achiev;

        if (!empty($keyword)) {
            $achiev = $achiev->like('foto_achive', $keyword)->Orlike('nama_achive', $keyword);
        }

        $data = [
            'title' => 'List Data Technology Suite',
            'achiev' => $achiev->paginate(10, 'achiev'),
            'pager' => $this->pager,
            'isi' => 'data/master/achiev/v_list'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Achiev',
            'isi' => 'data/master/achiev/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'id_achiev' => $this->request->getPost('id_achiev'),
            'nama_achiev' => $this->request->getPost('nama_achiev')
        ];

        $foto_achiev = $this->request->getFile('foto_achiev');

        if ($foto_achiev !== null) {
            if ($foto_achiev->isValid() && !$foto_achiev->hasMoved()) {
                $newName = $foto_achiev->getRandomName();
                $foto_achiev->move('upload_foto', $newName);
                $data['foto_achiev'] = $newName;
            }
        }

        $this->model_achiev->insert_achiev($data);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('achiev'));
    }

    public function edit($id_achiev)
    {
        $data = [
            'title' => 'Edit Data achiev',
            'achiev' => $this->model_achiev->edit_achiev($id_achiev),
            'isi' => 'data/master/achiev/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_achiev)
    {
        $data = [
            'nama_achiev' => $this->request->getPost('nama_achiev')
        ];

        $foto_achiev = $this->request->getFile('foto_achiev');

        if ($foto_achiev !== null) {
            if ($foto_achiev->isValid() && !$foto_achiev->hasMoved()) {
                // Hapus foto lama jika ada
                $achiev = $this->model_achiev->edit_achiev($id_achiev);
                if ($achiev['foto_achiev']) {
                    $oldFilePath = 'upload_foto/' . $achiev['foto_achiev'];
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Pindahkan foto baru
                $newName = $foto_achiev->getRandomName();
                $foto_achiev->move('upload_foto', $newName);
                $data['foto_achiev'] = $newName;
            }
        }

        $this->model_achiev->update_achiev($data, $id_achiev);


        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('achiev'));
    }

    public function delete($id_achiev)
    {
        $this->model_achiev->delete_achiev($id_achiev);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('achiev'));
    }
}
