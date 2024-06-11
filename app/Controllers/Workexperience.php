<?php

namespace App\Controllers;

use App\Models\Model_workexperience;

class workexperience extends BaseController
{
    private $model_workexperience;
    private $pager;

    public function __construct()
    {
        $this->model_workexperience = new Model_workexperience();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $workexperience = $this->model_workexperience;

        if (!empty($keyword)) {
            $workexperience = $workexperience->like('nama_instansi_workexperience', $keyword)
                ->orLike('posisi_workexperience', $keyword)
                ->orLike('keterangan_workexperience', $keyword)
                ->orLike('tahun_mulai_workexperience', $keyword)
                ->orLike('tahun_selesai_workexperience', $keyword);
        }

        $data = [
            'title' => 'List Data Work Experience',
            'workexperience' => $workexperience->paginate(10, 'workexperience'),
            'pager' => $this->pager,
            'isi' => 'data/master/workexperience/v_list'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data workexperience',
            'isi' => 'data/master/workexperience/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'id_workexperience' => $this->request->getPost('id_workexperience'),
            'nama_instansi_workexperience' => $this->request->getPost('nama_instansi_workexperience'),
            'posisi_workexperience' => $this->request->getPost('posisi_workexperience'),
            'keterangan_workexperience' => $this->request->getPost('keterangan_workexperience'),
            'tahun_mulai_workexperience' => $this->request->getPost('tahun_mulai_workexperience'),
            'tahun_selesai_workexperience' => $this->request->getPost('tahun_selesai_workexperience')
        ];

        $foto = $this->request->getFile('logo_workexperience');

        if ($foto !== null) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move('upload_foto', $newName);
                $data['logo_workexperience'] = $newName;
            }
        }

        $this->model_workexperience->insert_workexperience($data);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('workexperience'));
    }

    public function edit($id_workexperience)
    {
        $data = [
            'title' => 'Edit Data workexperience',
            'workexperience' => $this->model_workexperience->edit_workexperience($id_workexperience),
            'isi' => 'data/master/workexperience/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_workexperience)
    {
        $data = [
            'nama_instansi_workexperience' => $this->request->getPost('nama_instansi_workexperience'),
            'posisi_workexperience' => $this->request->getPost('posisi_workexperience'),
            'keterangan_workexperience' => $this->request->getPost('keterangan_workexperience'),
            'tahun_mulai_workexperience' => $this->request->getPost('tahun_mulai_workexperience'),
            'tahun_selesai_workexperience' => $this->request->getPost('tahun_selesai_workexperience')
        ];

        $logo_workexperience = $this->request->getFile('logo_workexperience');

        if ($logo_workexperience !== null) {
            if ($logo_workexperience->isValid() && !$logo_workexperience->hasMoved()) {
                // Hapus foto lama jika ada
                $workexperience = $this->model_workexperience->edit_workexperience($id_workexperience);
                if ($workexperience['logo_workexperience']) {
                    $oldFilePath = 'upload_foto/' . $workexperience['logo_workexperience'];
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Pindahkan foto baru
                $newName = $logo_workexperience->getRandomName();
                $logo_workexperience->move('upload_foto', $newName);
                $data['logo_workexperience'] = $newName;
            }
        }

        $this->model_workexperience->update_workexperience($data, $id_workexperience);


        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('workexperience'));
    }

    public function delete($id_workexperience)
    {
        $this->model_workexperience->delete_workexperience($id_workexperience);

        session()->setFlashdata('success', 'Data Berhasil Dihapus !!');
        return redirect()->to(base_url('workexperience'));
    }
}
