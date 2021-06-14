<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $inv['couple_name']; ?> - Marry.me</title>
    <script type="text/javascript">
        message = " <?= $inv['couple_name']; ?> - Marry.me ";

        function step() {
            message = message.substr(1) + message.substr(0, 1);
            document.title = message.substr(0, 15);
        }
    </script>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Damion&family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="data:;base64,iVBORwOKGO=" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/rose.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/util.css">
</head>

<body onload="setInterval(step,500)">
    <style>
        body {
            font-family: 'Damion';
            font-family: 'Abril Fatface';
        }
    </style>

    <!-- section1 : hero or head title -->
    <section class="section1">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display1">
                    <div class="py-4">
                        <h3 class="display1-sub-title" data-aos="fade-down" data-aos-delay="500">20 . 01 . 2025</h3>
                        <h1 class="display1-title" data-aos="zoom-in" data-aos-delay="500">Haycal & Shafa</h1>
                        <h3 class="display1-sub-title" data-aos="fade-up" data-aos-delay="500">The Wedding</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="website-block hero d-flex position-relative text-white text-center
            py-10 align-items-center">
            <div class="container py-0">
                <div class="display2">
                    <div class="py-4">
                        <h3 class="description" data-aos="fade-down">
                            " Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri
                            supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. Sesungguhnya yang
                            demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berpikir. "</br></br>- Q.S. Ar-Rum:21-
                        </h3>
                        <div class="container">
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?= base_url(); ?>/img/jaehyun.jpeg" alt="pengentin pria" style="width: 200px; align-item:center" data-aos="fade-down" data-aos-delay="500">
                                    <div class="card-body">
                                        <h5 class="card-title" data-aos="zoom-in" data-aos-delay="600"> Jojo</h5>
                                        <p class="card-text" data-aos="fade-up" data-aos-delay="800">Son of </br> Father name & Mother Name</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?= base_url(); ?>/img/rose.jpeg" alt="pengentin pria" style="width: 200px; align-item:center" data-aos="fade-down" data-aos-delay="500">
                                    <div class="card-body">
                                        <h5 class="card-title" data-aos="zoom-in" data-aos-delay="600"> Jeje</h5>
                                        <p class="card-text" data-aos="fade-up" data-aos-delay="800">Daughter of </br> Father name & Mother Name</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- countdown -->
    <section class="section3">
        <div class="website-block hero d-flex position-relative text-white text-center
        py-10 align-items-center">
            <div class="container py-0">
                <div class="display3">
                    <div class="py-4">
                        <div class="size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15">
                            <div class="wsize1">
                                <h3 class="display1-sub-title" data-aos="fade-down">
                                    20.01.2025
                                </h3>
                                <h3 class="l1-txt1 txt-center p-b-20" data-aos="zoom-out">
                                    INVITE YOU
                                </h3>
                                <p class="txt-center m2-txt1 p-b-67 countdown-description" style="font-family: Damion; font-size: 50px" data-aos="fade-up">
                                    To Our Special Day
                                </p>
                                <div class=" flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1" style="border:none;background-color: #B78E80;" data-aos="fade-down">
                                    <!-- days -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 days">20</span>
                                        <span class="m2-txt2">Days</span>
                                    </div>

                                    <span class="l1-txt2 p-b-22">:</span>
                                    <!-- hour -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 hours">17</span>
                                        <span class="m2-txt2">Hours</span>
                                    </div>

                                    <span class="l1-txt2 p-b-22 respon2">:</span>
                                    <!-- minutes -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 minutes">50</span>
                                        <span class="m2-txt2">Minutes</span>
                                    </div>

                                    <span class="l1-txt2 p-b-22">:</span>
                                    <!-- second -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 seconds">39</span>
                                        <span class="m2-txt2">Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- foto gallery -->
    <section class="section4">
        <div class="website-block gallery d-flex position-relative py-1">
            <div class="w-100 py-0">
                <div class="flexbin">
                    <a href="<?= base_url(); ?>/img/b3.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/b3.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg10.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg10.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg9.png" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg9.png">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg6.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg6.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg15.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg15.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg14.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg14.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg16.png" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg16.png">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg17.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg17.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg18.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg18.jpg">
                    </a>
                    <a href="<?= base_url(); ?>/img/bg19.jpg" data-aos="zoom-out">
                        <img src="<?= base_url(); ?>/img/bg19.jpg">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- location -->
    <section class="section5">
        <div class="website-block hero d-flex position-relative text-white text-center
            py-10 align-items-center">
            <div class="container py-0">
                <div class="display5">
                    <div class="py-4">
                        <h3 class="location-title" data-aos="zoom-out">
                            Our Wedding Location
                        </h3>
                        <div class="container">
                            <div class="card-deck">
                                <div class="card mb-4 location-akad" data-aos="zoom-out-down">
                                    <iframe class="card-maps-top img-fluid" width="100%" height="100%" src="https://maps.google.com/maps?q=jakart&t=&z=11&ie=UTF8&iwloc=&output=embed" style="border: 5px solid #B78E80"></iframe>
                                    <div class="card-body-location">
                                        <h4 class="card-title-location">Akad Nikah</h4>
                                        <p class="card-text-location"> Jl. Gatot Subroto No.Kav. 37, RT.6/RW.3, Kuningan, Kuningan Tim.,
                                            Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950 </p>
                                    </div>
                                </div>
                                <div class="card mb-4 location-resepsi" data-aos="zoom-out-down">
                                    <iframe class="card-maps-top img-fluid" width="100%" height="100%" src="https://maps.google.com/maps?q=jakart&t=&z=11&ie=UTF8&iwloc=&output=embed" style="border: 5px solid #B78E80"></iframe>
                                    <div class="card-body-location">
                                        <h4 class="card-title-location">Resepsi</h4>
                                        <p class="card-text-location"> Jl. Gatot Subroto No.Kav. 37, RT.6/RW.3, Kuningan, Kuningan Tim.,
                                            Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video -->
    <section class="section6">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display6">
                    <div class="container">
                        <div class="display6-title" data-aos="fade-down">
                            "we loved with love that was more than love"
                        </div>
                        <div class="display6-video">
                            <video width="400" controls>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BZpUUjEUGnE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section7">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display7">
                    <div class="display7-title">
                        <h1> Guestbook </h1>
                    </div>

                    <form action="/invitation/tamuCreate" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <?php foreach ($link as $d) : ?>
                            <input type="hidden" name="id_users" value="<?= user()->id; ?>">
                            <input type="hidden" name="slug" value="<?= (old('slug')) ? old('slug') : $d->slug ?>">
                        <?php endforeach; ?>

                        <div class="form-group">
                            <div class="name"><label for="name">Nama Tamu</label></div>
                            <input type="text" name="nama_tamu" value="guest_name" class="form-control" id="exampleFormControlInput1" placeholder="Diva Farhani (Rekan Kerja)">
                        </div>
                        <div class="form-group">
                            <div class="wish"><label for="exampleFormControlTextarea1">Pesan untuk kedua mempelai</label></div>
                            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
                        </div>
                        <div class="button-kirim">
                            <button type="submit" class="btn">Kirim</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <section class="section8">
        <div class="website-block hero d-flex position-relative text-white text-center
    py-10 align-items-center">
            <div class="container py-0">
                <div class="display8">
                    <div class="card-deck">
                        <div class="box box-2">
                            <div class="comments col-md-9" id="comments">
                                <div class="comment">
                                    <div class="comment-content col-md-11 col-sm-10">
                                        <h6 class="small comment-meta"></h6>
                                        <div class="comment-body">
                                            <?php foreach ($tamu as $d) : ?>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-title"><?= $d->nama_tamu ?></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <blockquote class="blockquote mb-0">
                                                            <p class="card-text"><?= $d->pesan ?></p>
                                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> -->
                                                            <footer class="blockquote-footer">
                                                                <p class="card-text"><small class="text-muted">Dibuat <?= $d->created_at ?></small></p>
                                                            </footer>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
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

    <!-- footer -->
    <section class="section9">
        <div class="website-block hero d-flex position-relative text-white text-center
    py-10 align-items-center" style="height: 15vh;">
            <div class="container py-0">
                <div class="display9">
                    <div class="py-4">
                        <h1 class="content-sec9">Haycal & Shafa</h1>
                        <h3 class="sub-content-sec9">The Wedding</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <audio id="music" controls autoplay hidden>
        <?php foreach ($music as $m) : ?>
            <source src="<?= base_url() ?>/uploads/<?= $m->slug; ?>/<?= $m->music; ?>" type="audio/mpeg">
        <?php endforeach; ?>
    </audio>

    <a class="float" onclick="document.getElementById('music').play()">
        <i class="fa fa-play my-float"></i>
    </a>
    <a class="vol-float" onclick="document.getElementById('music').pause()">
        <i class="fa fa-pause my-float"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/moment.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/countdowntime.js"></script>
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: 0,
            endtimeMonth: 0,
            endtimeDate: 1,
            endtimeHours: 18,
            endtimeMinutes: 0,
            endtimeSeconds: 0,
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
    <script src="<?= base_url(); ?>/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
<script>
</script>