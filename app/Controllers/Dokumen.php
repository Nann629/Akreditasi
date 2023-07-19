<?php

namespace App\Controllers;


use App\Models\M_Dokumen;
use App\Models\M_Kriteria;
use App\Models\M_Sub;

class Dokumen extends BaseController
{
    public function index()
    {
        $model = new M_Dokumen();
        $kriteria = new M_Kriteria();
        $sub = new M_Sub();
        $data = [
            'judul' => 'Data Dokumen',
            'Dokumen' => $model->getAllData(),
            'kriteria' => $kriteria->getAllData(),
            'sub' => $sub->getAllData()
        ];
        // load view
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('Dokumen/index', $data);
        echo view('utama/footer');
    }
    public function tambah()
    {
        $model = new M_Dokumen();
        $file = $this->request->getFile('image');
        $namaBaru = $file->getRandomName();
        $file->move('asset/assets/img/dokumen', $namaBaru);
        $data = [
            'image' => $namaBaru,
            'judul' => $this->request->getPost('judul'),
            'kriteria_id' => $this->request->getPost('kriteria_id'),
            'sub_id' => $this->request->getPost('sub_id'),
            // 'keterangan_kriteria' => $this->request->getPost('keterangan_kriteria'),
            // 'keterangan_sub' => $this->request->getPost('keterangan_sub'),

        ];
        //insert data
        $success = $model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('Dokumen'));
        }
    }
    public function hapus($id)
    {
        $model = new M_Dokumen();
        $success = $model->hapus($id);
        if ($success) {
            session()->getFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('Dokumen'));
        }
    }
    public function ubah()
    {
        $model = new M_Dokumen();
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('image');
        $namaBaru = $file->getRandomName();
        $file->move('asset/assets/img/dokumen', $namaBaru);
        $data = [
            'image' => $namaBaru,
            'judul' => $this->request->getPost('judul'),
            'kriteria_id' => $this->request->getPost('kriteria_id'),
            'sub_id' => $this->request->getPost('sub_id'),
        ];
        //Update data
        $success = $model->ubah($data, $id);
        if ($success) {
            session()->setFlashdata('message', 'DiUbah');
            return redirect()->to(base_url('Dokumen'));
        }
    }
}
