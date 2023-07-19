<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Profil'
        ];
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('profil/index');
        echo view('utama/footer');
    }
}
