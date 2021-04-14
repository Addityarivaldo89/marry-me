<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
    protected $table = 'invitation';
    protected $primaryKey = 'id_inv';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_inv', 'id_users', 'invoice', 'id_tema', 'couple_name', 'slug', 'foto_p', 'pria', 'instagram_p', 'ayah_p', 'ibu_p', 'foto_w', 'wanita', 'instagram_w', 'ayah_w', 'ibu_w', 'alamat_akad', 'akad_time', 'akad_date', 'akad_map', 'alamat_resepsi', 'resepsi_time', 'resepsi_date', 'resepsi_map', 'link_youtube'];

    // public function __construct() {
    //     $this->db = \Config\Database::connect();
    //     $this->vlink_youtube = $this->db->table('vlink_youtube');
    //     $this->invitation = $this->db->table('invitation');
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
        $this->vlink_youtube = $this->db->table('invitation');

        $builder = $this->vlink_youtube;
        $builder->select("slug, link_youtube");
        $builder->where('slug', $slug);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getDashboard()
    {
        $this->db = \Config\Database::connect();
        $this->invitation = $this->db->table('invitation');

        $builder = $this->invitation;
        $builder->select("id_inv, id_users, tema.nama as nama_tema, tema.harga as harga_tema, invoice, couple_name, slug, foto_p, pria, instagram_p, ayah_p, ibu_p, foto_w, wanita, instagram_w, ayah_w, ibu_w, alamat_akad, akad_time, akad_date, alamat_resepsi, resepsi_time, resepsi_date, resepsi_map, link_youtube");
        $builder->join('tema', 'invitation.id_tema = tema.id_tema');
        $builder->where('id_users', user()->id);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function cekData()
    {
        $this->db = \Config\Database::connect();
        $this->invitation = $this->db->table('invitation');

        $builder = $this->invitation;
        $builder->select("*");
        $builder->where('id_users', user()->id);
        $query = $builder->get()->getResult();

        return $query;
    }
}
