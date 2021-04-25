<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_users', 'slug', 'link_youtube', 'gambar'];

    // public function __construct() {
    //     $this->db = \Config\Database::connect();
    //     $this->vlink_youtube = $this->db->table('vlink_youtube');
    //     $this->invitation = $this->db->table('invitation');
    // }
    public function getGallery()
    {

        return $this->findAll();
    }

    public function hapusGallery($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}
