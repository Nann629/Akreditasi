<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Sub;

class Sub extends BaseController
{
    public function index()
    {
        //
        $model = new M_Sub();
        $data = [
            'judul' => 'Sub',
            'sub' => $model->getAllData()
        ];
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('sub/index');
        echo view('utama/footer');
    }

    public function tambah()
    {

        $model = new M_Sub();
        $data = [
            'code' => $this->request->getPost('code'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
        $succes = $model->tambah($data);
        if ($succes) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('sub'));
        }
    }

    public function hapus($id)
    {
        $model = new M_Sub();
        $succes = $model->hapus($id);
        if ($succes) {
            session()->getFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('sub'));
        }
    }

    public function ubah()
    {
        $model = new M_Sub();
        $id = $this->request->getPost('id');
        $data = [
            'code' => $this->request->getPost('code'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
        $success = $model->ubah($data, $id);
        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('sub'));
        }
    }
}
