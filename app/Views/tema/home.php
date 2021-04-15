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
  <link rel="stylesheet" href="<?= base_url(); ?>/css/home.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/css/navbar.css">

  <title>Marry.me</title>
</head>

<body>
  <style>
    body {
      font-family: 'Monsterrat';
      font-family: 'Comfortaa';
    }
  </style>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-title" href="<?= base_url('/'); ?>"><b>marry.me</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left:30%; color:#CB997E">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#theme">Theme's</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left:30%; color:#C7866A;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="button-login" style="font-family: Montserrat;">
              <a href="<?= base_url('login'); ?>" type="button" class="btn">LOGIN</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>

  <section class="section1" id="home">
    <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
      <div class="container py-0">
        <div class="display1-hero">
          <div class="hero-content">
            <h1 class="title">
              Digital Wedding Invitaton
            </h1>
            <h2 class="sub-title">
              saatnya beralih ke undangan digital, buat undangan pernikahanmu lebih berkesan.
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section2" id="about">
    <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
      <div class="container py-0">
        <div class="display2-description">
          <div class="clearfix">
            <img src="<?= base_url(); ?>/img/b2.jpg" class="col-md-4 float-md-end mb-3 img-fluid" width="200px" height="50px" alt="...">
            <div class="sec2-title" style="font-family:Montserrat; padding-bottom:4%">
              Apa itu undangan digital ?
            </div>
            <div class="sec2-content" style="font-family: Montserrat;">
              Undangan digital merupakan bentuk modern dari undangan pada umumnya.
              Dengan desain yang menarik akan membuat undangan pernikahan-mu lebih berkesan, selain itu
              dengan menggunakan undangan digital berarti kamu telah ikut membantu menjaga bumi dengan
              tidak lagi memakai kertas secara berlebihan. </br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section3">
    <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
      <div class="container py-0">
        <div class="display3-button">
          <div class="clearfix">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="sec3-title">
                    Ayo, Buat Undanganmu Sekarang!
                    <div class="button-login" style="font-family: Montserrat;">
                      <a href="<?= base_url('register'); ?>" type="button" class="btn">Buat Undangan</a>
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

  <section class="section4">
    <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
      <div class="container py-0">
        <div class="display4-fitur">
          <h1 class="sec3-title">Fitur Undangan Digital</h1>
          <div class="row" style="align-items: center;">
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url(); ?>/img/1.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Identitas Pasangan</h5>
                  <p class="card-text">menampilkan nama mempelai, orang tua dan sosial media.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url(); ?>/img/2.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Galeri</h5>
                  <p class="card-text">menampilkan foto dan video momen dari kedua mempelai</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url(); ?>/img/3.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Lokasi Acara</h5>
                  <p class="card-text">lokasi penyelnggaraan acara pernikahan, ditampilkan dalam bentuk maps </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url(); ?>/img/4.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Guest Book</h5>
                  <p class="card-text">pengunjung dapat mengisi buku tamu dan pesan do'a untuk kedua mempelai</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url(); ?>/img/5.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Countdown</h5>
                  <p class="card-text">menampilkan hitung mundur waktu pelaksanaan pernikahan</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url(); ?>/img/6.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Template Menarik</h5>
                  <p class="card-text">Tampilan undangan digital yang menarik untuk pernikahanmu</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section5" id="theme">
    <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
      <div class="container py-0">
        <div class="display-tema">
          <div class="container py-2">
            <h2 class="font-weight-light text-center text-muted py-3">Invitation Wedding Theme</h2>
          </div>
          <div class="container py-2">

            <!-- timeline item 1 -->
            <div class="row no-gutters">
              <div class="col-sm">
                <!--spacer-->
              </div>
              <!-- timeline item 1 center dot -->
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <!-- timeline item 1 event content -->
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted small">marry.me wedding invitation</div>
                    <img src="<?= base_url(); ?>/image/etnic.png" class="img-fluid" alt="responsive-image">
                    <h4 class="card-title text-muted">Etnic Modern</h4>
                    <p class="card-text">Mengusung tema jawa dengan nuansa biru gelap, undanganmu akan terlihat mewah dan elegan.</p>
                  </div>
                </div>
              </div>
            </div>
            <!--/row-->
            <!-- timeline item 2 -->
            <div class="row no-gutters">
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted small">marry.me wedding invitation</div>
                    <img src="<?= base_url(); ?>/image/rustic.png" class="img-fluid" alt="responsive-image">
                    <h4 class="card-title text-muted">Rustic</h4>
                    <p class="card-text">Dengan nuansa coklat akan membuat tampilan undanganmu terasa hangat.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <div class="row h-50">
                  <div class="col">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <div class="col-sm">
                <!--spacer-->
              </div>
            </div>
            <!--/row-->
            <!-- timeline item 3 -->
            <div class="row no-gutters">
              <div class="col-sm">
                <!--spacer-->
              </div>
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted">marry.me wedding invitation</div>
                    <img src="<?= base_url(); ?>/image/astronomy.png" class="img-fluid" alt="responsive-image">
                    <h4 class="card-title">Astronomy</h4>
                    <p class="card-text">Tema ini menampilkan warna-warna dimalam hari , dengan taburan bintang akan membuat undanganmu terlihat sangat romantis.</p>
                  </div>
                </div>
              </div>
            </div>
            <!--/row-->
            <!-- timeline item 4 -->
            <div class="row no-gutters">
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted small">marry.me wedding invitation</div>
                    <img src="<?= base_url(); ?>/image/rose.png" class="img-fluid" alt="responsive-image">
                    <h4 class="card-title">Rose</h4>
                    <p class="card-text">Undangan ini memiliki nuansa yang segar, dengan ornamen bunga mawar serta warna merah muda yang lembut.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <div class="row h-50">
                  <div class="col">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <div class="col-sm">
                <!--spacer-->
              </div>
            </div>
            <!--/row-->
            <div class="row no-gutters">
              <div class="col-sm">
                <!--spacer-->
              </div>
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted">marry.me wedding invitation</div>
                    <img src="<?= base_url(); ?>/image/green.png" class="img-fluid" alt="responsive-image">
                    <h4 class="card-title">Green</h4>
                    <p class="card-text">Tema ini menggunakan warna utama yaitu hijau, membuat undangan ini memberikan kesan yang menyenangkan namun tetap terlihat cantik.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--
    <section>
      <div class="section1" width="100%" height="500px">
        <div class="sec1_content" style="font-family:Montserrat;">
          <h1 class="font" style="font-weight: bolder;">Digital Invitation Wedding</h1>
          <hr>
        </div>
        <div clas="sub_content" style="font-family: Montserrat; text-align:center; font-size: 45pt; color: #85856f">
          <h3>saatnya beralih dari udangan cetak </br>
          menjadi undangan digital</h3>
        </div>
      </div>
    </section>
    
    <section>
      <div class="section2">
        <div class="clearfix">
          <img src="<?= base_url(); ?>/img/b2.jpg" class="col-md-4 float-md-end mb-3 img-fluid" width="200px" height="50px" alt="...">
          <div class="sec2-title" style="font-family:Montserrat; padding-bottom:4%">
            Apa itu undangan digital ?
          </div>  
          <div class="sec2-content" style="font-family: Montserrat;">
          Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
          exercitation ullamco laboris nisi. Amet, consectetur adipiscing elit,  sed 
          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi. </br>
          </div>
        </div>  
      </div>
    </section>
     
    <section>
      <div class="section3">
        <h1 class="sec3-title">Fitur Undangan Digital</h1>
        <div class="row" style="align-items: center;">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url(); ?>/img/1.png" alt="Card image cap" style="width:150px; align-item:center">
              <div class="card-body">
                <h5 class="card-title">Identitas Pasangan</h5>
                <p class="card-text">menampilkan nama mempelai, orang tua dan sosial media.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url(); ?>/img/2.png" alt="Card image cap" style="width:150px; align-item:center">
              <div class="card-body">
                <h5 class="card-title">Galeri</h5>
                <p class="card-text">menampilkan foto dan video momen dari kedua mempelai</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url(); ?>/img/3.png" alt="Card image cap" style="width:150px; align-item:center">
                <div class="card-body">
                  <h5 class="card-title">Lokasi Acara</h5>
                  <p class="card-text">lokasi penyelnggaraan acara pernikahan, ditampilkan dalam bentuk maps </p>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url(); ?>/img/4.png" alt="Card image cap" style="width:150px; align-item:center">
              <div class="card-body">
                <h5 class="card-title">Guest Book</h5>
                <p class="card-text">pengunjung dapat mengisi buku tamu dan pesan do'a untuk kedua mempelai</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url(); ?>/img/5.png" alt="Card image cap" style="width:150px; align-item:center">
              <div class="card-body">
                <h5 class="card-title">Countdown</h5>
                <p class="card-text">menampilkan hitung mundur waktu pelaksanaan pernikahan</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url(); ?>/img/6.png" alt="Card image cap" style="width:150px; align-item:center">
              <div class="card-body">
                <h5 class="card-title">Template Menarik</h5>
                <p class="card-text">Tampilan undangan digital yang menarik untuk pernikahanmu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
  
    <section>
      <div class="section4">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="sec4-content" style="font-family: Comfortaa; 
              font-weight:bolder; color:#CB997E; font-size:30 pt; 
              text-align:right; padding-top:1%">
                Ayo, Buat Undangan Digital Untuk Pernikahanmu
              </div>
            </div>
            <div class="col order-1">
              <div class="sec4-btn" style="font-family: Montserrat;">
                <button type="button" class="btn" style="background-color: #CB997E; color:white; width:80px">Login </button>
                <button type="button" class="btn">Create</button>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>