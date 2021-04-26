<?php

namespace App\Models;

use CodeIgniter\Model;

class MusicModel extends Model
{
    protected $table = 'music';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_users', 'slug', 'music'];

    // public function __construct() {
    //     $this->db = \Config\Database::connect();
    //     $this->vlink_youtube = $this->db->table('vlink_youtube');
    //     $this->invitation = $this->db->table('invitation');
    // }
    public function getMusic()
    {

        return $this->findAll();
    }

    public function hapusMusic($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}
