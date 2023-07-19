<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'tbl_user';

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData($id_user = false)
    {
        if ($id_user == false) {
            return $this->builder->get();
        } else {
            $this->builder->where('id_user', $id_user);
            return $this->builder->get()->getRowArray();
        }
    }

    public function save_register($data)
    {
        return $this->builder->insert($data);
    }
    public function login($email, $password)
    {
        return $this->builder->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }

    public function hapus($id_user)
    {
        return $this->builder->delete(['id_user' => $id_user]);
    }
}
