<?php

namespace App\Controllers;

use App\Models\Model_about;

class about extends BaseController
{
    private $model_about;

    public function __construct()
    {
        $this->model_about = new Model_about();
    }

    public function index()
    {
        $dataCount =  $this->model_about->countAllResults();

        $data = [
            'title' => 'About',
            'about' => $dataCount > 0,
            'isi' => 'data/master/about/v_list',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data About',
            'isi' => 'data/master/about/v_tambah',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        helper('filesystem');

        $data = [
            'id_about' => $this->request->getPost('id_about'),
            'judul_about' => $this->request->getPost('judul_about'),
            'link_youtube_about' => $this->request->getPost('link_youtube_about'),
            'quote_about' => $this->request->getPost('quote_about'),
            'isi_about' => $this->request->getPost('isi_about')
        ];

        $foto = $this->request->getFile('foto_about');
        if ($foto !== null && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move('upload_foto', $newName);
            $data['foto_about'] = $newName;
        }

        $ttd_about = $this->request->getPost('ttd_about');
        if ($ttd_about) {
            list($type, $ttd_about) = explode(';', $ttd_about);
            list(, $ttd_about) = explode(',', $ttd_about);
            $ttd_about = base64_decode($ttd_about);
            $signatureFileName = uniqid() . '.png';
            $filePath = FCPATH . 'upload_foto/' . $signatureFileName;
            write_file($filePath, $ttd_about);
            $data['ttd_about'] = $signatureFileName;
        }

        $this->model_about->insert_about($data);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('about'));
    }
    public function edit($id_about)
    {
        $data = [
            'title' => 'Edit Data about',
            'about' => $this->model_about->edit_about($id_about),
            'isi' => 'data/master/about/v_edit',
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id_about)
    {
        helper('filesystem');

        $data = [
            'judul_about' => $this->request->getPost('judul_about'),
            'link_youtube_about' => $this->request->getPost('link_youtube_about'),
            'quote_about' => $this->request->getPost('quote_about'),
            'isi_about' => $this->request->getPost('isi_about')
        ];

        $foto_about = $this->request->getFile('foto_about');
        if ($foto_about !== null && $foto_about->isValid() && !$foto_about->hasMoved()) {
            // Hapus foto lama jika ada
            $about = $this->model_about->edit_about($id_about);
            if ($about['foto_about']) {
                $oldFilePath = 'upload_foto/' . $about['foto_about'];
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Pindahkan foto baru
            $newName = $foto_about->getRandomName();
            $foto_about->move('upload_foto', $newName);
            $data['foto_about'] = $newName;
        }

        $ttd_about = $this->request->getPost('ttd_about');
        if ($ttd_about && strpos($ttd_about, 'data:image/png;base64,') === 0) {
            // Decode and save the new signature
            list($type, $ttd_aboutData) = explode(';', $ttd_about);
            list(, $ttd_aboutData) = explode(',', $ttd_aboutData);
            $ttd_aboutData = base64_decode($ttd_aboutData);

            // Remove the old signature if it exists
            $about = $this->model_about->edit_about($id_about);
            if ($about['ttd_about']) {
                $oldSignaturePath = 'upload_foto/' . $about['ttd_about'];
                if (file_exists($oldSignaturePath)) {
                    unlink($oldSignaturePath);
                }
            }

            // Save the new signature
            $signatureFileName = uniqid() . '.png';
            $filePath = FCPATH . 'upload_foto/' . $signatureFileName;
            write_file($filePath, $ttd_aboutData);
            $data['ttd_about'] = $signatureFileName;
        }

        $this->model_about->update_about($data, $id_about);

        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('about'));
    }
}
