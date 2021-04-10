<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
    protected $table = 'invitation';
    protected $primaryKey = 'id_inv';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_inv', 'id_users', 'invoice', 'id_tema', 'couple_name', 'slug', 'wedding_date', 'foto_p', 'pria', 'instagram_p', 'ayah_p', 'ibu_p', 'foto_w', 'wanita', 'instagram_w', 'ayah_w', 'ibu_w', 'alamat_akad', 'akad_time', 'akad_date', 'akad_map', 'alamat_resepsi', 'resepsi_time', 'resepsi_date', 'resepsi_map', 'link_youtube'];

    // public function __construct() {
    //     $this->db = \Config\Database::connect();
    //     $this->vlink_youtube = $this->db->table('vlink_youtube');
    // }

    public function getInv($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getYt($slug = false)
    {
        $this->db = \Config\Database::connect();
        $this->vlink_youtube = $this->db->table('vlink_youtube');

        $builder = $this->vlink_youtube;
        $builder->select("slug, link_youtube");
        $builder->where('slug', $slug);
        $query = $builder->get()->getResult();

        return $query;
        
    }
}
