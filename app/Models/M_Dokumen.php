<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Dokumen extends Model
{
  protected $table = 'dokumen';

  public function __construct()
  {
    $this->db = db_connect();
    $this->builder = $this->db->table($this->table);
  }

  public function getAllData($id = false)
  {
    if ($id == false) {
      $this->builder->join('kriteria', 'kriteria.id = dokumen.kriteria_id', 'left');
      $this->builder->join('sub', 'sub.id = dokumen.sub_id', 'left');
      return $this->builder->get();
    } else {
      $this->builder->where('id', $id);
      return $this->builder->get()->getRowArray();
    }
  }

  public function tambah($data)
  {
    return $this->builder->insert($data);
  }

  public function hapus($id)
  {
    $this->builder->join('kriteria', 'kriteria.id = dokumen.kriteria_id', 'left');
    $this->builder->join('sub', 'sub.id = dokumen.sub_id', 'left');
    return $this->builder->delete(['id' => $id]);
  }

  public function ubah($data, $id)
  {
    return $this->builder->update($data, ['id' => $id]);
  }
}
