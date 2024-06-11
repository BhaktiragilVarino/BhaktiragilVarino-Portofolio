<?php

namespace App\Controllers;

use App\Models\Model_technologysuite;

class technologysuite extends BaseController
{
    private $model_technologysuite;
    private $pager;

    public function __construct()
    {
        $this->model_technologysuite = new Model_technologysuite();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $technologysuite = $this->model_technologysuite;

        if (!empty($keyword)) {
            $technologysuite = $technologysuite->like('nama_keahlian_technologysuite', $keyword)
                ->orLike('keterangan_technologysuite', $keyword);
        }

        $data = [
            'title' => 'List Data Technology Suite',
            'technologysuite' => $technologysuite->paginate(10, 'technologysuite'),
            'pager' => $this->pager,
            'isi' => 'data/master/technologysuite/v_list'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data technologysuite',
            'isi' => 'data/master/technologysuite/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'id_technologysuite' => $this->request->getPost('id_technologysuite'),
            'nama_keahlian_technologysuite' => $this->request->getPost('nama_keahlian_technologysuite'),
            'keterangan_technologysuite' => $this->request->getPost('keterangan_technologysuite')
        ];

        $foto = $this->request->getFile('foto_technologysuite');

        if ($foto !== null) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move('upload_foto', $newName);
                $data['foto_technologysuite'] = $newName;
            }
        }

        $this->model_technologysuite->insert_technologysuite($data);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('technologysuite'));
    }

    public function edit($id_technologysuite)
    {
        $data = [
            'title' => 'Edit Data technologysuite',
            'technologysuite' => $this->model_technologysuite->edit_technologysuite($id_technologysuite),
            'isi' => 'data/master/technologysuite/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_technologysuite)
    {
        $data = [
            'nama_keahlian_technologysuite' => $this->request->getPost('nama_keahlian_technologysuite'),
            'keterangan_technologysuite' => $this->request->getPost('keterangan_technologysuite')
        ];

        $foto_technologysuite = $this->request->getFile('foto_technologysuite');

        if ($foto_technologysuite !== null) {
            if ($foto_technologysuite->isValid() && !$foto_technologysuite->hasMoved()) {
                // Hapus foto lama jika ada
                $technologysuite = $this->model_technologysuite->edit_technologysuite($id_technologysuite);
                if ($technologysuite['foto_technologysuite']) {
                    $oldFilePath = 'upload_foto/' . $technologysuite['foto_technologysuite'];
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Pindahkan foto baru
                $newName = $foto_technologysuite->getRandomName();
                $foto_technologysuite->move('upload_foto', $newName);
                $data['foto_technologysuite'] = $newName;
            }
        }

        $this->model_technologysuite->update_technologysuite($data, $id_technologysuite);


        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('technologysuite'));
    }

    public function delete($id_technologysuite)
    {
        $this->model_technologysuite->delete_technologysuite($id_technologysuite);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('technologysuite'));
    }
}
