<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dasboard'
        ];
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('beranda/index');
        echo view('utama/footer');
    }
}
