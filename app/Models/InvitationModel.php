<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
    protected $table = 'invitation';
    protected $primaryKey = 'id_inv';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_inv', 'id_users', 'invoice', 'id_tema', 'sub_judul', 'couple_name', 'slug', 'foto_p', 'pria', 'instagram_p', 'ayah_p', 'ibu_p', 'foto_w', 'wanita', 'instagram_w', 'ayah_w', 'ibu_w', 'alamat_akad', 'akad_time', 'akad_date', 'alamat_resepsi', 'resepsi_time', 'resepsi_date', 'link_youtube'];

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


    public function getDashboard()
    {
        $this->db = \Config\Database::connect();
        $this->invitation = $this->db->table('invitation');

        $builder = $this->invitation;
        $builder->select("id_inv, id_users, tema.nama as nama_tema, tema.id_tema as id_tema, tema.harga as harga_tema, invoice, couple_name, sub_judul, slug, foto_p, pria, instagram_p, ayah_p, ibu_p, foto_w, wanita, instagram_w, ayah_w, ibu_w, alamat_akad, akad_time, akad_date, alamat_resepsi, resepsi_time, resepsi_date, link_youtube");
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

    public function insertGalery($data)
    {
        return $this->db->table('gallery')->insert($data);
    }

    public function getGallery($slug = false)
    {
        $this->db = \Config\Database::connect();
        $this->gallery = $this->db->table('gallery');

        $builder = $this->gallery;
        $builder->select("*");
        $builder->where('slug', $slug);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getGalleryDashboard()
    {
        $this->db = \Config\Database::connect();
        $this->gallery = $this->db->table('gallery');

        $builder = $this->gallery;
        $builder->select("*");
        $builder->where('id_users', user()->id);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getMusicDashboard()
    {
        $this->db = \Config\Database::connect();
        $this->music = $this->db->table('music');

        $builder = $this->music;
        $builder->select("*");
        $builder->where('id_users', user()->id);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getMusic($slug = false)
    {
        $this->db = \Config\Database::connect();
        $this->gallery = $this->db->table('music');

        $builder = $this->gallery;
        $builder->select("*");
        $builder->where('slug', $slug);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getDataTamu($slug = false)
    {
        $this->db = \Config\Database::connect();
        $this->music = $this->db->table('buku_tamu');

        $builder = $this->music;
        $builder->select("*");
        $builder->where('slug', $slug);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getYtPengaturan()
    {
        $this->db = \Config\Database::connect();
        $this->gallery = $this->db->table('link_yt');

        $builder = $this->gallery;
        $builder->select("*");
        $builder->where('id_users', user()->id);
        $query = $builder->get()->getResult();

        return $query;
    }

    public function getYt($slug = false)
    {
        $this->db = \Config\Database::connect();
        $this->gallery = $this->db->table('link_yt');

        $builder = $this->gallery;
        $builder->select("*");
        $builder->where('slug', $slug);
        $query = $builder->get()->getResult();

        return $query;
    }
}
