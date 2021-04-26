<?php

namespace App\Controllers;

use App\Models\KomikModel;
use App\Models\InvitationModel;
use App\Models\GalleryModel;
use App\Models\MusicModel;

class Invitation extends BaseController
{
    protected $invitationModel;

    public function __construct()
    {
        helper('form');
        $this->invitationModel = new InvitationModel();
        $this->komikModel = new KomikModel();
        $this->galleryModel = new GalleryModel();
        $this->musicModel = new MusicModel();
    }

    public function index()
    {
        return view('tema/home');
    }

    public function beranda()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            $ada = $this->invitationModel->cekData();
            if ($ada == false) {
                $data = [
                    'title' => 'Form Invitation',
                    'validation' => \Config\Services::validation()
                ];

                return view('invitation/form', $data);
            } else {
                $data = [
                    'title' => 'Form Login',
                    'validation' => \Config\Services::validation(),
                    'dashboard' => $this->invitationModel->getDashboard()
                ];

                return view('invitation/dashboard', $data);
            }
        }
    }

    public function tema()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            return view('invitation/pilih-tema');
        }
    }

    public function form()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            $data = [
                'title' => 'Form Invitation',
                'validation' => \Config\Services::validation()
            ];

            return view('invitation/form', $data);
        }
    }

    public function profile()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            $data = [
                'title' => 'My Profile',
                'dashboard' => $this->invitationModel->getDashboard()
            ];
            return view('invitation/profile', $data);
        }
    }

    public function pengaturan()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            $data = [
                'title' => 'Pengaturan',
                'komik' => $this->komikModel->getKomik(),
                'dashboard' => $this->invitationModel->getDashboard(),
                'gallery' => $this->invitationModel->getGalleryDashboard(),
                'music' => $this->invitationModel->getMusicDashboard(),
            ];
            return view('invitation/pengaturan', $data);
        }
    }

    public function store()
    {
        $uploads = $this->request->getFiles();

        if ($uploads) {
            foreach ($uploads['gambar'] as $img) {
                $slug = $this->request->getVar('slug');
                $img->move(ROOTPATH . 'public/uploads/' . $slug);
                $data = [
                    'gambar' => $img->getName(),
                    'slug' => $slug,
                    'link_youtube' => $this->request->getVar('link_youtube'),
                    'id_users' => $this->request->getVar('id_users')
                ];
                $this->galleryModel->save($data);
            }
            session()->setFlashdata('success', 'Upload successfully');
            return redirect()->to('/pengaturan');
        }
    }

    public function saveMusic()
    {
        $uploads = $this->request->getFiles();

        if ($uploads) {
            foreach ($uploads['music'] as $msc) {
                $slug = $this->request->getVar('slug');
                $msc->move(ROOTPATH . 'public/uploads/' . $slug);
                $data = [
                    'music' => $msc->getName(),
                    'slug' => $slug,
                    'id_users' => $this->request->getVar('id_users')
                ];
                $this->musicModel->save($data);
            }
            session()->setFlashdata('success', 'Upload successfully');
            return redirect()->to('/pengaturan');
        }
    }

    public function galleryCreate()
    {
        $data = [
            'title' => 'Daftar komik',
            'link' => $this->invitationModel->getYt(user()->id),
            'gallery' => $this->invitationModel->getYtPengaturan(),
            'dashboard' => $this->invitationModel->getDashboard()
        ];
        return view('invitation/uploadgallery', $data);
    }


    public function detail($slug)
    {
        // $authenticate =  \Myth\Auth\Config\Services::authentication();
        // if (!$authenticate->check()) {
        //     session()->set('redirect_url', current_url());
        //     return redirect('login');
        // } else {
        $data = [
            'title' => 'Detail Invitation',
            'inv' => $this->invitationModel->getInv($slug),
            'link' => $this->invitationModel->getYt($slug),
            'gallery' => $this->invitationModel->getGallery($slug),
            'music' => $this->invitationModel->getMusicDashboard($slug)
        ];

        //jika inv tidak ada di tabel
        if (empty($data['inv'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Maaf Invitaion ' . $slug . ' tidak ditemukan.');
        }

        $db = \Config\Database::connect();
        $tema = $db->table('invitation')->where('slug', $slug)->get()->getRow();

        // var_dump($tema->id_tema);die;

        if ($tema->id_tema == 1) {
            return view('tema/template_astronomy', $data);
        } elseif ($tema->id_tema == 2) {
            return view('tema/template_etnic', $data);
        } elseif ($tema->id_tema == 3) {
            return view('tema/template_fall', $data);
        } elseif ($tema->id_tema == 4) {
            return view('tema/template_rose', $data);
        } elseif ($tema->id_tema == 5) {
            return view('tema/template_rustic', $data);
        } else {
            return view('invitation/tema', $data);
        }
        // }

        // return view('invitation/tema', $data);
    }

    public function create()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            $data = [
                'title' => 'Form Tambah Invitation',
                'validation' => \Config\Services::validation()
            ];

            return view('invitaion/form', $data);
        }
    }

    public function save()
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            //validasi input
            if (!$this->validate([
                'couple_name' => [
                    'rules' => 'required|is_unique[invitation.couple_name]',
                    'errors' => [
                        'required' => '{field} invitaion harus diisi',
                        'is_unique' => '{field} invitaion sudah terdaftar'
                    ]
                ],
                'foto_p' => [
                    'rules' => 'max_size[foto_p,2048]|is_image[foto_p]|mime_in[foto_p,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
                ],
                'foto_w' => [
                    'rules' => 'max_size[foto_w,2048]|is_image[foto_w]|mime_in[foto_w,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
                ]
            ])) {
                return redirect()->to('/')->withInput();
            }

            //ambil gambar
            $fileFotoP = $this->request->getFile('foto_p');
            $fileFotoW = $this->request->getFile('foto_w');
            //apakah tidak ada gambar yang di upload?
            if ($fileFotoW->getError() == 4) {
                if ($fileFotoP->getError() == 4) {
                    $namaFotoP = 'default.svg';
                }
                $namaFotoW = 'default.svg';
            } else {
                //generate nama foto random
                $namaFotoP = $fileFotoP->getRandomName();
                $namaFotoW = $fileFotoW->getRandomName();
                //pindahkan file ke folder img
                $fileFotoP->move('img/user-upload', $namaFotoP);
                $fileFotoW->move('img/user-upload', $namaFotoW);
            }

            $slug = url_title($this->request->getVar('couple_name'), '-', true);
            $this->invitationModel->save([
                'id_inv' => $this->request->getVar('id_inv'),
                'id_users' => $this->request->getVar('id_users'),
                'invoice' => $this->request->getVar('invoice'),
                'id_tema' => $this->request->getVar('id_tema'),
                'couple_name' => $this->request->getVar('couple_name'),
                'slug' => $slug,
                'foto_p' => $namaFotoP,
                'pria' => $this->request->getVar('pria'),
                'instagram_p' => $this->request->getVar('instagram_p'),
                'ayah_p' => $this->request->getVar('ayah_p'),
                'ibu_p' => $this->request->getVar('ibu_p'),
                'foto_w' => $namaFotoW,
                'wanita' => $this->request->getVar('wanita'),
                'instagram_w' => $this->request->getVar('instagram_w'),
                'ayah_w' => $this->request->getVar('ayah_w'),
                'ibu_w' => $this->request->getVar('ibu_w'),
                'alamat_akad' => $this->request->getVar('alamat_akad'),
                'akad_time' => $this->request->getVar('akad_time'),
                'akad_date' => $this->request->getVar('akad_date'),
                'akad_map' => $this->request->getVar('akad_map'),
                'alamat_resepsi' => $this->request->getVar('alamat_resepsi'),
                'resepsi_time' => $this->request->getVar('resepsi_time'),
                'resepsi_date' => $this->request->getVar('resepsi_date'),
                'resepsi_map' => $this->request->getVar('resepsi_map')
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/beranda');
        }
    }

    public function delete($id)
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            //cari gambar berdasarkan id
            $inv = $this->invitationModel->find($id);

            //cek jika file gambarnya default.svg
            if ($inv['foto_w,foto_p'] != 'default.svg') {
                //hapus gambar sampe ke akar
                unlink('img/user-upload' . $inv['foto_w,foto_p']);
            }

            $this->invitationModel->delete($id);
            session()->setFlashdata('pesan', 'Data berhasil dihapus.');
            return redirect()->to('/beranda');
        }
    }

    public function deleteGallery($id)
    {
        $gallery = $this->galleryModel->find($id);
        //cek jika file gambarnya default.svg
        if ($gallery['gambar'] != 'default.svg') {
            //hapus gambar sampe ke akar
            unlink('uploads/' . $gallery['slug'] . '/' . $gallery['gambar']);
        }

        $this->galleryModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/pengaturan#collapseFive');
    }

    public function deleteMusic($id)
    {
        $music = $this->musicModel->find($id);
        //cek jika file gambarnya default.mp3
        if ($music['music'] != 'default.mp3') {
            //hapus gambar sampe ke akar
            unlink('uploads/' . $music['slug'] . '/' . $music['music']);
        }

        $this->musicModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/pengaturan#collapseFive');
    }

    public function edit($slug)
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            $data = [
                'title' => 'Form Ubah Data Invitation',
                'validation' => \Config\Services::validation(),
                'inv' => $this->invitationModel->getInv($slug)
            ];

            return view('invitation/pengaturan', $data);
        }
    }

    public function update($id)
    {
        $authenticate =  \Myth\Auth\Config\Services::authentication();
        if (!$authenticate->check()) {
            session()->set('redirect_url', current_url());
            return redirect('login');
        } else {
            //cek judul
            $invLama = $this->invitationModel->getInv($this->request->getVar('slug'));
            if ($invLama['couple_name'] == $this->request->getVar('couple_name')) {
                $rule_inv = 'required';
            } else {
                $rule_inv = 'required|is_unique[inv.couple_name]';
            }

            //validasi input
            if (!$this->validate([
                'couple_name' => [
                    'rules' => $rule_inv,
                    'errors' => [
                        'required' => '{field} invitaion harus diisi',
                        'is_unique' => '{field} invitaion sudah terdaftar'
                    ]
                ],
                'foto_p' => [
                    'rules' => 'max_size[foto_p,2048]|is_image[foto_p]|mine_in[foto_p,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
                ],
                'foto_w' => [
                    'rules' => 'max_size[foto_w,2048]|is_image[foto_w]|mine_in[foto_w,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
                ]
            ])) {
                return redirect()->to('/invitation/pengaturan' . $this->request->getVar('slug'))->withInput();
            }

            //ambil gambar
            $fileFotoP = $this->request->getFile('foto_p');
            $fileFotoW = $this->request->getFile('foto_w');
            //cek gambar, apakah tetap gambar lama?
            if ($fileFotoW->getError() == 4) {
                if ($fileFotoP->getError() == 4) {
                    $namaFotoP = $this->request->getVar('foto_pLama');
                }
                $namaFotoW = $this->request->getVar('foto-wLama');
            } else {
                //generate nama foto random
                $namaFotoP = $fileFotoP->getRandomName();
                $namaFotoW = $fileFotoW->getRandomName();
                //hapus file yang lama
                if ($this->request->getVar('foto_pLama') != 'default.svg') {
                    unlink('img/user_upload' . $this->request->getVar('foto_pLama'));
                    if ($this->request->getVar('foto_wLama') != 'default.svg') {
                        unlink('img/user_upload' . $this->request->getVar('foto_wLama'));
                    }
                }
            }

            $slug = url_title($this->request->getVar('couple_name'), '-', true);
            $this->invitationModel->save([
                'id_inv' => $this->request->getVar('id_inv'),
                'id_users' => $this->request->getVar('id_users'),
                'invoice' => $this->request->getVar('invoice'),
                'id_tema' => $this->request->getVar('id_tema'),
                'couple_name' => $this->request->getVar('couple_name'),
                'slug' => $slug,
                'wedding_date' => $this->request->getVar('wedding_date'),
                'foto_p' => $fileFotoP,
                'pria' => $this->request->getVar('pria'),
                'instagram_p' => $this->request->getVar('instagram_p'),
                'ayah_p' => $this->request->getVar('ayah_p'),
                'ibu_p' => $this->request->getVar('ibu_p'),
                'foto_w' => $fileFotoW,
                'wanita' => $this->request->getVar('wanita'),
                'instagram_w' => $this->request->getVar('instagram_w'),
                'ayah_w' => $this->request->getVar('ayah_w'),
                'ibu_w' => $this->request->getVar('ibu_w'),
                'alamat_akad' => $this->request->getVar('alamat_akad'),
                'akad_time' => $this->request->getVar('akad_time'),
                'akad_date' => $this->request->getVar('akad_date'),
                'akad_map' => $this->request->getVar('akad_map'),
                'alamat_resepsi' => $this->request->getVar('alamat_resepsi'),
                'resepsi_time' => $this->request->getVar('resepsi_time'),
                'resepsi_date' => $this->request->getVar('resepsi_date'),
                'resepsi_map' => $this->request->getVar('resepsi_map')
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

            return redirect()->to('/beranda');
        }
    }
}
