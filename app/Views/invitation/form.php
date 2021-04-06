<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;600&family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <link rel="icon" href="data:;base64,iVBORwOKGO=">
  <link rel="stylesheet" href="<?= base_url(); ?>/css/user_form2.css">


  <title>Form</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-title" href="<?= base_url('/'); ?>"><b>marry.me</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </nav>

  <section class="section1-form">
    <div class="c-wrapper c-fixed-components">
      <div class="container py-0">
        <div class="form-sec1">
          <!-- MultiStep Form -->
          <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
              <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-5 pb-0 mt-3 mb-3">
                  <h2><strong>Lengkapi Datamu & Pasangan</strong></h2>
                  <p>Untuk melengkapi informasi pada undangamu</p>
                  <div class="row">
                    <div class="col-md-12 mx-0">
                      <form action="/invitation/save" method="post" enctype="multipart/form-data" id="msform">
                        <?= csrf_field(); ?>
                        <!-- progressbar -->
                        <ul id="progressbar">
                          <li class="active" id="account"><strong>Start</strong></li>
                          <li id="personal"><strong>Pasangan</strong></li>
                          <li id="personal"><strong>Acara</strong></li>
                          <li id="personal"><strong>Tema</strong></li>
                          <li id="personal"><strong>Alamat</strong></li>
                          <li id="payment"><strong>Pembayaran</strong></li>
                          <li id="confirm"><strong>Finish</strong></li>
                        </ul> <!-- fieldsets -->
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title">Mulai Dengan Tanggal Acara</h2>
                            <input type="date" name="wedding_date" placeholder="" />
                            <input type="hidden" name="invoice" value="<?= date('usidy') ?>" />
                          </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title">Data Pengantin Pria</h2>
                            <div class="row">
                              <div class="col-lg-4 pull-lg-8 text-xs-center">
                                <img src="/img/default.svg" class="img-thumbnail img-preview prep">
                                <label for="Foto_p" class="form-label imgp">Upload Foto Pria</label>
                                <input type="file" id="foto_p" name="foto_p" class="custom-file-input <?= ($validation->hasError('foto_p')) ? 'is-invalid' : ''; ?>" onchange="previewPria()">
                                <div class="invalid-feedback">
                                  <?= $validation->getError('foto_p'); ?>
                                </div>
                              </div>
                              <input type="text" name="pria" placeholder="Pengantin Pria" />
                              <input type="text" name="instagram_p" placeholder="@pengantinPria" />
                              <input type="text" name="ayah_p" placeholder="Nama Ayah" />
                              <input type="text" name="ibu_p" placeholder="Nama Ibu" />
                            </div>
                            <h2 class="fs-title">Data Pengantin Wanita</h2>
                            <div class="row">
                              <div class="col-lg-4 pull-lg-8 text-xs-center">
                                <img src="/img/default.svg" class="img-thumbnail img-preview prew">
                                <label for="Foto_w" class="form-label imgw">Upload Foto Wanita</label>
                                <input type="file" id="foto_w" name="foto_w" class="custom-file-input <?= ($validation->hasError('foto_w')) ? 'is-invalid' : ''; ?>" onchange="previewWanita()">
                                <div class="invalid-feedback">
                                  <?= $validation->getError('foto_w'); ?>
                                </div>
                              </div>
                              <input type="text" name="wanita" placeholder="Pengantin Wanita" />
                              <input type="text" name="instagram_w" placeholder="@pengantinWanita" />
                              <input type="text" name="ayah_w" placeholder="Nama Ayah" />
                              <input type="text" name="ibu_w" placeholder="Nama Ibu" />
                            </div>
                          </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title">Lokasi Akad Nikah</h2>
                            <input type="text" name="alamat_akad" placeholder="Jl. Kenangan" />
                            <input type="time" name="akad_time" placeholder="" />
                            <input type="date" name="akad_date" placeholder="" />
                            <input type="maps" name="akad_map" placeholder="" />
                            <h2 class="fs-title">Lokasi Resepsi Nikah</h2>
                            <input type="text" name="alamat_resepsi" placeholder="Jl. Kenangan" />
                            <input type="time" name="resepsi_time" placeholder="" />
                            <input type="date" name="resepsi_date" placeholder="" />
                            <input type="maps" name="resepsi_map" placeholder="" />
                          </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title">Pilih Tema Undanganmu</h2>
                            <div class="row">
                              <div class="col-3"> <label class="pay">Pilih Tema</label> </div>
                              <div class="col-9"> <select class="list-dt" id="month" name="id_tema">
                                  <option value="1">Tema 1</option>
                                  <option value="2">Tema 2</option>
                                  <option value="3">Tema 3</option>
                                  <option value="4">Tema 4</option>
                                  <option value="5">Tema 5</option>
                                </select> </div>
                            </div>
                          </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title">Alamat undanganmu</h2>
                            <input type="text" class="<?= ($validation->hasError('couple_name')) ? 'is-invalid' : ''; ?>" name="couple_name" placeholder="Jojo & Jeje" autofocus />
                            <div class="invalid-feedback">
                              <?= $validation->getError('judul'); ?>
                            </div>
                          </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title">Payment Information</h2>
                            <div class="radio-group">
                              <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                              <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                            </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                            <div class="row">
                              <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                              <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                            </div>
                            <div class="row">
                              <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                              <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                  <option selected>Month</option>
                                  <option>January</option>
                                  <option>February</option>
                                  <option>March</option>
                                  <option>April</option>
                                  <option>May</option>
                                  <option>June</option>
                                  <option>July</option>
                                  <option>August</option>
                                  <option>September</option>
                                  <option>October</option>
                                  <option>November</option>
                                  <option>December</option>
                                </select> <select class="list-dt" id="year" name="expyear">
                                  <option selected>Year</option>
                                </select> </div>
                            </div>
                          </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                        </fieldset>
                        <fieldset>
                          <div class="form-card">
                            <h2 class="fs-title text-center">Success !</h2> <br><br>
                            <div class="row justify-content-center">
                              <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>/js/form2.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  <script>
    function previewWanita() {
      const foto_w = document.querySelector('#foto_w');
      const foto_wLabel = document.querySelector('.imgw');
      const imgPreview = document.querySelector('.prew');

      //ganti url
      foto_wLabel.textContent = foto_w.files[0].name;

      //ganti preview
      const fileFotoW = new FileReader();
      fileFotoW.readAsDataURL(foto_w.files[0]);

      fileFotoW.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }

    function previewPria() {
      const foto_p = document.querySelector('#foto_p');
      const foto_pLabel = document.querySelector('.imgp');
      const imgPreview = document.querySelector('.prep');

      //ganti url
      foto_pLabel.textContent = foto_p.files[0].name;

      //ganti preview
      const fileFotoP = new FileReader();
      fileFotoP.readAsDataURL(foto_p.files[0]);

      fileFotoP.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>

</html>