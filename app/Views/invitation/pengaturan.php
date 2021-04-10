<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>
<section class="content">
    <div class="container-fluid">
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
                                            Hero (judul)
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p> Bagian ini akan berada paling atas pada undangan. Biasanya bisa berisi nama pengantin, tanggal pernikahan ataupun quotes.</p>
                                        <form>
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                                <small id="" class="form-text text-muted">Contoh : JOJO & JEJE</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sub Judul</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                                <small id="" class="form-text text-muted">Bisa Tanggal Pernikahan, contoh : 25 . 01 . 2025</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sub Judul 2</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
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
                                        <form>
                                            <div class="col-lg-4 pull-lg-8 text-xs-center">
                                                <label for="img">Select image:</label>
                                                <input type="file" id="img" name="img" accept="image/*">
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Mempelai Pria</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Ayah (Pria)</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Ibu (Pria)</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                        </form>
                                        </br>
                                        <form>
                                            <div class="col-lg-4 pull-lg-8 text-xs-center">
                                                <label for="img">Select image:</label>
                                                <input type="file" id="img" name="img" accept="image/*">
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Mempelai Wanita</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Ayah (Wanita)</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Ibu (Wanita)</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Countdown
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p> Bagian ini akan menampilkan proses hitung mundur hingga hari pernikahanmu</p>
                                        <form>
                                            <div class="form-group">
                                                <label for="">Tanggal</label>
                                                <input type="date" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jam / Waktu</label>
                                                <input type="time" class="form-control" id="" aria-describedby="">
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
                                            Lokasi
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p> Bagian ini akan menampilkan lokasi akad nikah maupun acara resepsi pernikahanmu</p>
                                        <form>
                                            <div class="form-group">
                                                <label for="">Alamat Akad Nikah</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat Resepsi</label>
                                                <input type="text" class="form-control" id="" aria-describedby="">
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

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p> Bagian ini akan menampilkan foto dan video pre-weddingmu </p>
                                        <div class="block">
                                            <label class="button" for="images">Upload Images</label>
                                            <input type="file" id="images" multiple="multiple" />
                                            <div id="multiple-file-preview">
                                                <ul id="sortable">
                                                    <div class="clear-both"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="">Link Video Pre-Wedding</label>
                                                <input type="link" class="form-control" id="" aria-describedby="">
                                                <small id="" class="form-text text-muted">Upload Videomu di Youtube terlebih dahulu <br> Contoh : 
                                                https://youtu.be/<b>iT44pZmor3o</b> <br> Perhatikan Huruf yang dicetak tebal</small>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
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
                                        <form>
                                            <div class="form-group">
                                                <label for="">Link Video Pre-Wedding</label>
                                                <input type="link" class="form-control" id="" aria-describedby="">
                                                <small id="" class="form-text text-muted">Upload Videomu di Youtube terlebih dahulu <br>
                                                <b>https://youtu.be/47SpkXg_sYY</b></small>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Footer
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p> Bagian ini akan menampilkan pesan dibawah undanganmu </p>
                                        <form>
                                            <div class="form-group">
                                                <label for="">Pesan</label>
                                                <input type="link" class="form-control" id="" aria-describedby="">
                                                <small id="" class="form-text text-muted">Contoh : Jojo & Jeje , quotes atau tanggal pernikahan</small>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>