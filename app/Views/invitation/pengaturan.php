<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>
<section class="content">
    <div class="container-fluid">
        <?php if (session('msg')) : ?>
            <div class="alert alert-info alert-dismissible">
                <?= session('msg') ?>
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            </div>
        <?php endif ?>

        <?php foreach ($dashboard as $d) : ?>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Pengaturan Undangan</b></h3>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-light" type="button">
                                lihat undangan
                            </button>
                            <br>
                            <!-- collapsible form -->

                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Judul Undangan
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> Bagian ini akan berada paling atas pada undangan. Biasanya bisa berisi nama pengantin, tanggal pernikahan ataupun quotes.</p>
                                            <form action="/invitation/cobaUpdate/<?= $d->id_inv; ?>" method="post" enctype="multipart/form-data">
                                                <div>
                                                    <input type="hidden" name="id_users" value="<?= $d->id_users; ?>">
                                                    <input type="hidden" name="id_tema" value="<?= $d->id_tema; ?>">
                                                    <input type="hidden" name="invoice" value="<?= $d->invoice; ?>">
                                                    <input type="hidden" name="slug" value="<?= $d->slug; ?>">
                                                    <input type="hidden" name="foto_p" value="<?= $d->foto_p; ?>">
                                                    <input type="hidden" name="pria" value="<?= $d->pria; ?>">
                                                    <input type="hidden" name="instagram_p" value="<?= $d->instagram_p; ?>">
                                                    <input type="hidden" name="ayah_p" value="<?= $d->ayah_p; ?>">
                                                    <input type="hidden" name="ibu_p" value="<?= $d->ibu_p; ?>">
                                                    <input type="hidden" name="foto_w" value="<?= $d->foto_w; ?>">
                                                    <input type="hidden" name="wanita" value="<?= $d->wanita; ?>">
                                                    <input type="hidden" name="instagram_w" value="<?= $d->instagram_w; ?>">
                                                    <input type="hidden" name="ayah_w" value="<?= $d->ayah_w; ?>">
                                                    <input type="hidden" name="ibu_w" value="<?= $d->ibu_w; ?>">
                                                    <input type="hidden" name="alamat_akad" value="<?= $d->alamat_akad; ?>">
                                                    <input type="hidden" name="akad_time" value="<?= $d->akad_time; ?>">
                                                    <input type="hidden" name="alamat_resepsi" value="<?= $d->alamat_resepsi; ?>">
                                                    <input type="hidden" name="resepsi_time" value="<?= $d->resepsi_time; ?>">
                                                    <input type="hidden" name="resepsi_date" value="<?= $d->resepsi_date; ?>">
                                                    <input type="hidden" name="link_youtube" value="<?= $d->link_youtube; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Kedua Pasangan</label>
                                                    <input type="text" class="form-control" name="couple_name" value="<?= (old('couple_name')) ? old('couple_name') : $d->couple_name ?>">
                                                    <small id="" class="form-text text-muted">Masukkan nama kedua pasangan tanpa tanda baca <br> Contoh : Rayhan Evelyn</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Pernikahan</label>
                                                    <input type="date" class="form-control" name="akad_date" value="<?= (old('akad_date')) ? old('akad_date') : $d->akad_date ?>">
                                                    <small id="" class="form-text text-muted">Bisa Tanggal Pernikahan, contoh : 25 . 01 . 2025</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Sub Judul</label>
                                                    <input type="text" class="form-control" name="sub_judul" value="<?= (old('sub_judul')) ? old('sub_judul') : $d->sub_judul ?>">
                                                    <small id="" class="form-text text-muted">Bisa quotes atau kata seperti "The wedding", Boleh kosong</small>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Identitas Pasangan
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> Bagian ini akan identitas kedua pasangan</p>
                                            <form action="/invitation/cobaUpdate/<?= $d->id_inv; ?>" method="post" enctype="multipart/form-data">
                                                <div>
                                                    <input type="hidden" name="id_users" value="<?= $d->id_users; ?>">
                                                    <input type="hidden" name="id_tema" value="<?= $d->id_tema; ?>">
                                                    <input type="hidden" name="invoice" value="<?= $d->invoice; ?>">
                                                    <input type="hidden" name="couple_name" value="<?= $d->couple_name; ?>">
                                                    <input type="hidden" name="sub_judul" value="<?= $d->sub_judul; ?>">
                                                    <input type="hidden" name="slug" value="<?= $d->slug; ?>">
                                                    <input type="hidden" name="foto_p" value="<?= $d->foto_p; ?>">
                                                    <input type="hidden" name="instagram_p" value="<?= $d->instagram_p; ?>">
                                                    <input type="hidden" name="foto_w" value="<?= $d->foto_w; ?>">
                                                    <input type="hidden" name="instagram_w" value="<?= $d->instagram_w; ?>">
                                                    <input type="hidden" name="alamat_akad" value="<?= $d->alamat_akad; ?>">
                                                    <input type="hidden" name="akad_time" value="<?= $d->akad_time; ?>">
                                                    <input type="hidden" name="akad_date" value="<?= $d->akad_date; ?>">
                                                    <input type="hidden" name="alamat_resepsi" value="<?= $d->alamat_resepsi; ?>">
                                                    <input type="hidden" name="resepsi_time" value="<?= $d->resepsi_time; ?>">
                                                    <input type="hidden" name="resepsi_date" value="<?= $d->resepsi_date; ?>">
                                                    <input type="hidden" name="link_youtube" value="<?= $d->link_youtube; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Mempelai Pria</label>
                                                    <input type="text" class="form-control" name="pria" value="<?= (old('pria')) ? old('pria') : $d->pria ?>">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="">Nama Ayah (Pria)</label>
                                                            <input type="text" class="form-control" name="ayah_p" value="<?= (old('ayah_p')) ? old('ayah_p') : $d->ayah_p ?>">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Nama Ibu (Pria)</label>
                                                            <input type="text" class="form-control" name="ibu_p" value="<?= (old('ibu_p')) ? old('ibu_p') : $d->ibu_p ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                </br>
                                                <div class="form-group">
                                                    <label for="">Nama Mempelai Wanita</label>
                                                    <input type="text" class="form-control" name="wanita" value="<?= (old('wanita')) ? old('wanita') : $d->wanita ?>">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="">Nama Ayah (Wanita)</label>
                                                            <input type="text" class="form-control" name="ayah_w" value="<?= (old('ayah_w')) ? old('ayah_w') : $d->ayah_w ?>">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Nama Ibu (Wanita)</label>
                                                            <input type="text" class="form-control" name="ibu_w" value="<?= (old('ibu_w')) ? old('ibu_w') : $d->ibu_w ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Lokasi & Tanggal Pernikahan
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> Bagian ini akan menampilkan lokasi akad nikah maupun acara resepsi pernikahanmu</p>
                                            <form action="/invitation/cobaUpdate/<?= $d->id_inv; ?>" method="post" enctype="multipart/form-data">
                                                <div>
                                                    <input type="hidden" name="id_users" value="<?= $d->id_users; ?>">
                                                    <input type="hidden" name="id_tema" value="<?= $d->id_tema; ?>">
                                                    <input type="hidden" name="invoice" value="<?= $d->invoice; ?>">
                                                    <input type="hidden" name="couple_name" value="<?= $d->couple_name; ?>">
                                                    <input type="hidden" name="sub_judul" value="<?= $d->sub_judul; ?>">
                                                    <input type="hidden" name="slug" value="<?= $d->slug; ?>">
                                                    <input type="hidden" name="foto_p" value="<?= $d->foto_p; ?>">
                                                    <input type="hidden" name="pria" value="<?= $d->pria; ?>">
                                                    <input type="hidden" name="instagram_p" value="<?= $d->instagram_p; ?>">
                                                    <input type="hidden" name="ayah_p" value="<?= $d->ayah_p; ?>">
                                                    <input type="hidden" name="ibu_p" value="<?= $d->ibu_p; ?>">
                                                    <input type="hidden" name="foto_w" value="<?= $d->foto_w; ?>">
                                                    <input type="hidden" name="wanita" value="<?= $d->wanita; ?>">
                                                    <input type="hidden" name="instagram_w" value="<?= $d->instagram_w; ?>">
                                                    <input type="hidden" name="ayah_w" value="<?= $d->ayah_w; ?>">
                                                    <input type="hidden" name="ibu_w" value="<?= $d->ibu_w; ?>">
                                                    <input type="hidden" name="alamat_akad" value="<?= $d->alamat_akad; ?>">
                                                    <input type="hidden" name="akad_time" value="<?= $d->akad_time; ?>">
                                                    <input type="hidden" name="akad_date" value="<?= $d->akad_date; ?>">
                                                    <input type="hidden" name="alamat_resepsi" value="<?= $d->alamat_resepsi; ?>">
                                                    <input type="hidden" name="resepsi_time" value="<?= $d->resepsi_time; ?>">
                                                    <input type="hidden" name="resepsi_date" value="<?= $d->resepsi_date; ?>">
                                                    <input type="hidden" name="link_youtube" value="<?= $d->link_youtube; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Alamat Akad Nikah</label>
                                                    <input type="text" class="form-control" name="alamat_akad" value="<?= (old('alamat_akad')) ? old('alamat_akad') : $d->alamat_akad ?>">
                                                    <small id="" class="form-text text-muted">Masukkan nama gedung dan/atau alamat rumah dengan sesuai agar dapat dengan mudah ditemukan</small>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="">Tanggal Akad Nikah</label>
                                                            <input type="date" class="form-control" name="akad_date" value="<?= (old('akad_date')) ? old('akad_date') : $d->akad_date ?>">
                                                            <small id="" class="form-text text-muted">Masukkan Tanggal akad nikah</small>
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Jam Akad Nikah</label>
                                                            <input type="time" class="form-control" name="akad_time" value="<?= (old('akad_time')) ? old('akad_time') : $d->akad_time ?>">
                                                            <small id="" class="form-text text-muted">Masukkan jam akad nikah</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="">Alamat Resepsi</label>
                                                    <input type="text" class="form-control" name="alamat_resepsi" value="<?= (old('alamat_resepsi')) ? old('alamat_resepsi') : $d->alamat_resepsi ?>">
                                                    <small id="" class="form-text text-muted">Masukkan nama gedung dan/atau alamat rumah dengan sesuai agar dapat dengan mudah ditemukan</small>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="">Tanggal Resepsi</label>
                                                            <input type="date" class="form-control" name="resepsi_date" value="<?= (old('resepsi_date')) ? old('resepsi_date') : $d->resepsi_date ?>">
                                                            <small id="" class="form-text text-muted">Masukkan Tanggal resepsi</small>
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Jam Resepsi</label>
                                                            <input type="time" class="form-control" name="resepsi_time" value="<?= (old('resepsi_time')) ? old('resepsi_time') : $d->resepsi_time ?>">
                                                            <small id="" class="form-text text-muted">Masukkan nama Jam resepsi</small>
                                                        </div>
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Galeri Foto & Video
                                            </button>
                                        </h2>
                                    </div>
                                    <form method="post" action="<?= base_url('Gallery/uploadFiles'); ?>" enctype="multipart/form-data">
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="/gallery/create" class="btn btn-primary my-1"><i class="fa fa-plus"></i> Gallery & Video</a>
                                                        <?php if (session()->getFlashdata('pesan')) : ?>
                                                            <div class="alert alert-success" role="alert">
                                                                <?= session()->getFlashdata('pesan'); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php echo form_close(); ?>
                                                        <hr>
                                                        <div class="form-group flexbin">
                                                            <label for="">Gallery Uploaded</label><br>
                                                            <?php foreach ($gallery as $g) : ?>
                                                                <?= csrf_field(); ?>
                                                                <img src="/uploads/<?= $g->slug; ?>/<?= $g->gambar; ?>" alt="" width="20%">
                                                                <form action="/gallery/<?= $g->id; ?>" method="post" class="d-inline mr-3">
                                                                    <i class="fas fa-arrow-right"></i>
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                                                </form>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <?php foreach ($video as $v) : ?>

                                                                <label for="">Link Youtube</label>
                                                                <input type="text" class="form-control" value="https://youtu.be/<?= (old('link_youtube')) ? old('link_youtube') : $v->link_youtube; ?>" disabled>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Background Music
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> Bagian ini akan menentukan background musik pada undanganmu </p>
                                            <?php echo form_open_multipart('/invitation/saveMusic'); ?>
                                            <form>
                                                <input type="hidden" name="id_users" value="<?= user()->id; ?>">
                                                <?php foreach ($dashboard as $d) : ?>
                                                    <input type="hidden" name="slug" value="<?= (old('slug')) ? old('slug') : $d->slug ?>">
                                                <?php endforeach; ?>
                                                <div class="form-group">
                                                    <label for="">Upload lagumu</label>
                                                    <input type="file" name="music[]" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            <hr>
                                            <label class="mt-2" for="">Music Uploaded</label><br>
                                            <?php foreach ($music as $m) : ?>
                                                <audio id="music" controls autoplay>
                                                    <source src="<?= base_url() ?>/uploads/<?= $m->slug; ?>/<?= $m->music; ?>" type="audio/mpeg">
                                                </audio>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" value="<?= $m->music ?>" class="form-control" disabled>
                                                        <small id="" class="form-text text-muted">Kamu hanya dapat memasukan 1 lagu, <br> Silahkan hapus untuk menguploadnya ulang</small>
                                                    </div>
                                                    <div class="col">
                                                        <form action="/music/<?= $m->id; ?>" method="post" class="d-inline">
                                                            <i class="fas fa-arrow-right mr-3"></i>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection(); ?>