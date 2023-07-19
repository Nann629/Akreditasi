<?php

namespace App\Models;

use CodeIgniter\Model;

class M_web extends Model
{
    protected $table = 'kriteria';

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData($id = false)
    {
        if ($id == false) {
            $this->builder->join('dokumen', 'dokumen.kriteria_id = kriteria.id', 'left');
            return $this->builder->get();
        } else {
            $this->builder->where('id', $id);
            return $this->builder->get()->getRowArray();
        }
    }
}
