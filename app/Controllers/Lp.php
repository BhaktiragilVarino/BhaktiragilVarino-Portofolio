<?php

namespace App\Controllers;

class Lp extends BaseController
{
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
}
