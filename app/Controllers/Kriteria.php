<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Kriteria;

class Kriteria extends BaseController
{
    public function index()
    {
        //
        $model = new M_Kriteria();
        $data = [
            'judul' => 'Kriteria',
            'kriteria' => $model->getAllData()
        ];
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('kriteria/index');
        echo view('utama/footer');
    }

    public function tambah()
    {

        $model = new M_Kriteria();
        $data = [
            'code_kriteria' => $this->request->getPost('code_kriteria'),
            'keterangan_kriteria' => $this->request->getPost('keterangan_kriteria'),
        ];
        $succes = $model->tambah($data);
        if ($succes) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('kriteria'));
        }
    }

    public function hapus($id)
    {
        $model = new M_Kriteria();
        $success = $model->hapus($id);
        if ($success) {
            session()->getFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('kriteria'));
        }
    }

    public function ubah()
    {
        $model = new M_Kriteria();
        $id = $this->request->getPost('id');
        $data = [
            'code_kriteria' => $this->request->getPost('code_kriteria'),
            'keterangan_kriteria' => $this->request->getPost('keterangan_kriteria'),
        ];
        $success = $model->ubah($data, $id);
        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('kriteria'));
        }
    }
}
