<?php

namespace App\Controllers;

use App\Models\Model_education;

class education extends BaseController
{
    private $model_education;
    private $pager;

    public function __construct()
    {
        $this->model_education = new Model_education();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $education = $this->model_education;

        if (!empty($keyword)) {
            $education = $education->like('nama_instansi_education', $keyword)
                ->orLike('prodi_education', $keyword)
                ->orLike('keterangan_education', $keyword);
        }

        $data = [
            'title' => 'List Data Technology Suite',
            'education' => $education->paginate(10, 'education'),
            'pager' => $this->pager,
            'isi' => 'data/master/education/v_list'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data education',
            'isi' => 'data/master/education/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'id_education' => $this->request->getPost('id_education'),
            'nama_instansi_education' => $this->request->getPost('nama_instansi_education'),
            'prodi_education' => $this->request->getPost('prodi_education'),
            'keterangan_education' => $this->request->getPost('keterangan_education')
        ];

        $logo_instansi_education = $this->request->getFile('logo_instansi_education');

        if ($logo_instansi_education !== null) {
            if ($logo_instansi_education->isValid() && !$logo_instansi_education->hasMoved()) {
                $newName = $logo_instansi_education->getRandomName();
                $logo_instansi_education->move('upload_foto', $newName);
                $data['logo_instansi_education'] = $newName;
            }
        }

        $this->model_education->insert_education($data);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('education'));
    }

    public function edit($id_education)
    {
        $data = [
            'title' => 'Edit Data education',
            'education' => $this->model_education->edit_education($id_education),
            'isi' => 'data/master/education/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_education)
    {
        $data = [
            'nama_instansi_education' => $this->request->getPost('nama_instansi_education'),
            'prodi_education' => $this->request->getPost('prodi_education'),
            'keterangan_education' => $this->request->getPost('keterangan_education')
        ];

        $logo_instansi_education = $this->request->getFile('logo_instansi_education');

        if ($logo_instansi_education !== null) {
            if ($logo_instansi_education->isValid() && !$logo_instansi_education->hasMoved()) {
                // Hapus foto lama jika ada
                $education = $this->model_education->edit_education($id_education);
                if ($education['logo_instansi_education']) {
                    $oldFilePath = 'upload_foto/' . $education['logo_instansi_education'];
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Pindahkan foto baru
                $newName = $logo_instansi_education->getRandomName();
                $logo_instansi_education->move('upload_foto', $newName);
                $data['logo_instansi_education'] = $newName;
            }
        }

        $this->model_education->update_education($data, $id_education);


        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('education'));
    }

    public function delete($id_education)
    {
        $this->model_education->delete_education($id_education);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('education'));
    }
}
