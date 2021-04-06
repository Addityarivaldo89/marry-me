<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
    protected $table = 'invitation';
    protected $primaryKey = 'id_inv';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_inv', 'invoice', 'id_tema', 'couple_name', 'slug', 'wedding_date', 'foto_p', 'pria', 'instagram_p', 'ayah_p', 'ibu_p', 'foto_w', 'wanita', 'instagram_w', 'ayah_w', 'ibu_w', 'alamat_akad', 'akad_time', 'akad_date', 'akad_map', 'alamat_resepsi', 'resepsi_time', 'resepsi_date', 'resepsi_map'];

    public function getInv($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
