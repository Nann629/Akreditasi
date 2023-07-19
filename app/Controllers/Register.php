<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'User'
        ];
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('login/register');
        echo view('utama/footer');
    }
}
