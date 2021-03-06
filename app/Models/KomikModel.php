<?php 

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $primaryKey = 'id_komik';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_komik','judul','slug','penulis','penerbit','sampul'];

    public function getKomik($slug=false)
    {
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}   