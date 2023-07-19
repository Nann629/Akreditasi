<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $model = new ModelAuth();
        $data = [
            'judul' => 'User',
            'user' => $model->getAllData()
        ];
        echo view('utama/header', $data);
        echo view('utama/sidebar');
        echo view('login/register', $data);
        echo view('utama/footer');
    }

    public function register()
    {
        return view('login/register');
    }
    public function save_register()
    {
        $model = new ModelAuth();
        $file = $this->request->getFile('foto_user');
        $namaBaru = $file->getRandomName();
        $file->move('asset/assets/img/profile', $namaBaru);
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!'
                ]
            ],
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!'
                ]
            ],
            'no_hp' => [
                'label' => 'Nomor Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!'
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!',
                    'matches'  => '{field} Tidak Sama !!!'
                ]
            ]
        ])) {
            //jika valid
            $data = array(
                'foto_user' => $namaBaru,
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password' => $this->request->getPost('password'),
                'level' => 2
            );
            $model->save_register($data);
            session()->setFlashdata('pesan', 'User Berhasil Ditambahkan!!!');
            return redirect()->to(base_url('auth'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth'));
        }
    }
    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('login/login', $data);
    }
    public function cek_login()
    {
        $model = new ModelAuth();
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak boleh kosong !!!'
                ]
            ],
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $model->login($email, $password);
            if ($cek) {
                // jika data cocok
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto_user', $cek['foto_user']);
                //login
                return redirect()->to(base_url('home'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal !! Username & Password Tidak Cocok !!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->set('nama_user');
        session()->set('email');
        session()->set('level');
        session()->set('foto_user');
        session()->setFlashdata('pesan', 'Logout Suksess.. !!');
        return redirect()->to(base_url('auth/login'));
    }

    public function hapus($id_user)
    {
        $model = new ModelAuth();
        $data = [
            'tbl_user' => $model->getAllData($id_user)
        ];
        $model->hapus($id_user);
        $img = $data['tbl_user']['foto_user'];
        if ($img != 'default.jpg') {
            unlink(FCPATH . 'asset/assets/img/profile/' . $img);
        }
        session()->setFlashdata('message', 'Dihapus!');
        return redirect()->to(base_url('auth'));
    }
}
