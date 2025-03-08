<?php

namespace App\Controllers;


use App\Models\Model_pesan;


class Lp extends BaseController
{

    private $model_pesan;

    public function __construct()
    {
        $this->model_pesan = new Model_pesan();
    }
    public function index()
    {
        $data = [
            'title' => 'Portofolio',
            'isi' => 'v_lp',
        ];
        echo view('v_lp', $data);
    }
    public function aboutdetail()
    {
        $data = [
            'title' => 'Portofolio',
            'isi' => 'v_aboutdetail',
        ];
        echo view('data/detail/v_aboutdetail', $data);
    }
    public function projectdetail()
    {
        $data = [
            'title' => 'Portofolio',
            'isi' => 'v_aboutdetail',
        ];
        echo view('data/detail/v_projectdetail', $data);
    }
    public function save()
    {
        $data = [
            'id_pesan' => $this->request->getPost('id_pesan'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan'),
        ];

        $this->model_pesan->insert_pesan($data);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('lp'));
    }
}
