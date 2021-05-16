<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table = 'buku_tamu';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_users', 'slug', 'nama_tamu', 'pesan', 'gambar'];

    // public function __construct() {
    //     $this->db = \Config\Database::connect();
    //     $this->vlink_youtube = $this->db->table('vlink_youtube');
    //     $this->invitation = $this->db->table('invitation');
    // }
    public function getTamu()
    {

        return $this->findAll();
    }

    public function hapusTamu($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}
