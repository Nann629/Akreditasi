<?php

namespace App\Controllers;

use App\Models\M_Dokumen;

class Web extends BaseController
{
    public function index()
    {
        $model = new M_Dokumen();

        $data = [
            'judul' => 'Dasboard',
            'web' => $model->getAllData()
        ];
        return view('beranda/tamu1', $data);
    }
}
