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
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Condiment&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="data:;base64,iVBORwOKGO=" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/util.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/rustic.css">
</head>

<body onload="setInterval(step,500)">
    <style>
        body {
            font-family: 'Belleza';
            font-family: 'Condiment';
        }
    </style>

    <!-- section1 : hero or head title -->
    <section class="section1">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display1">
                    <div class="py-4">
                        <h3 class="display1-sub-title" data-aos="fade-down"><?= $inv['akad_date']; ?></h3>
                        <h1 class="display1-title" data-aos="zoom-in"><?= $inv['couple_name']; ?></h1>
                        <h3 class="display1-sub-title" data-aos="fade-up"><?= $inv['sub_judul']; ?></h3>
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
                        <h3 class="description" data-aos="zoom-out-up">
                            " Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri
                            supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. Sesungguhnya yang
                            demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berpikir. "</br></br>- Q.S. Ar-Rum:21-
                        </h3>
                        <div class="container">
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/img/user-upload/<?= $inv['foto_p']; ?>" alt="Card image cap" style="width:150px; align-item:center" data-aos="zoom-out-right" data-aos-delay="800">
                                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000">
                                        <h5 class="card-title"><?= $inv['pria']; ?></h5>
                                        <p class="card-text">Son of </br> <?= $inv['ayah_p']; ?> & <?= $inv['ibu_p']; ?></p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/img/user-upload/<?= $inv['foto_w']; ?>" alt="Card image cap" style="width:150px; align-item:center" data-aos="zoom-out-left" data-aos-delay="800">
                                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000">
                                        <h5 class="card-title"><?= $inv['wanita']; ?></h5>
                                        <p class="card-text">Daughter of </br> <?= $inv['ayah_w']; ?> & <?= $inv['ibu_w']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="website-block hero d-flex position-relative text-white text-center
        py-10 align-items-center">
            <div class="container py-0">
                <div class="display3">
                    <div class="py-4">
                        <h3 class="location-title" data-aos="zoom-out-up">
                            Our Wedding Location
                        </h3>
                        <div class="container">
                            <div class="card-deck">
                                <div class="card mb-4 location-akad">
                                    <iframe class="card-maps-top img-fluid" width="100%" height="100%" src="https://maps.google.com/maps?q=<?= $inv['alamat_akad']; ?>&t=&z=11&ie=UTF8&iwloc=&output=embed"></iframe>
                                    <div class="card-body">
                                        <h4 class="card-title-loaction" data-aos="fade-down">Akad Nikah</h4>
                                        <p class="card-text-location" data-aos="zoom-in"><?= $inv['alamat_akad']; ?></p>
                                    </div>
                                </div>
                                <div class="card mb-4 location-resepsi">
                                    <iframe class="card-maps-top img-fluid" width="100%" height="100%" src="https://maps.google.com/maps?q=<?= $inv['alamat_resepsi']; ?>&t=&z=11&ie=UTF8&iwloc=&output=embed"></iframe>
                                    <div class="card-body">
                                        <h4 class="card-title-loaction" data-aos="fade-down">Resepsi</h4>
                                        <p class="card-text-location" data-aos="zoom-in"><?= $inv['alamat_resepsi']; ?></p>
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
        <div class="website-block hero d-flex position-relative text-white text-center
    py-10 align-items-center">
            <div class="container py-0">
                <div class="display4">
                    <div class="py-4">
                        <div class="size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15">
                            <div class="wsize1">
                                <h3 class="countdown-sub-title" data-aos="fade-down" data-aos-delay="500">20 . 01 . 2025</h3>
                                <h3 class="l1-txt1 txt-center p-b-22 countdown-title" style="font-family: Prata; font-size: 50pt" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="30">
                                    INVITE YOU
                                </h3>
                                <p class="txt-center m2-txt1 p-b-67 countdown-plus" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="30">
                                    To Our Wedding
                                </p>
                                <div class=" flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1 wedding-countdown" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="30" style="background-color: #74583E;">
                                    <!-- days -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 days">2</span>
                                        <span class="m2-txt2">Days</span>
                                    </div>

                                    <span class="l1-txt2 p-b-22">:</span>
                                    <!-- hour -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 hours">7</span>
                                        <span class="m2-txt2">Hours</span>
                                    </div>

                                    <span class="l1-txt2 p-b-22 respon2">:</span>
                                    <!-- minutes -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 minutes">20</span>
                                        <span class="m2-txt2">Minutes</span>
                                    </div>

                                    <span class="l1-txt2 p-b-22">:</span>
                                    <!-- second -->
                                    <div class="flex-col-c-m wsize2 m-b-20">
                                        <span class="l1-txt2 p-b-4 seconds">10</span>
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

    <section class="section5">
        <div class="website-block gallery d-flex position-relative py-1">
            <div class="w-100 py-0">
                <div class="flexbin">
                    <?php foreach ($gallery as $g) : ?>
                        <a href="<?= base_url(); ?>/uploads/<?= $g->slug; ?>/<?= $g->gambar; ?>" data-aos="zoom-in">
                            <img src="<?= base_url(); ?>/uploads/<?= $g->slug; ?>/<?= $g->gambar; ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section6">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display6">
                    <div class="container">
                        <div class="display6-title" data-aos="fade-down">
                            "we loved with love that was more than love"
                        </div>
                        <div class="display5-video">
                            <?php
                            foreach ($link as $links) : ?>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $links->link_youtube; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php endforeach; ?>
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
                            <input type="text" name="nama_tamu" class="form-control" id="exampleFormControlInput1">
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
                                            <div class="card">
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
        </div>
    </section>

    <section class="section9">
        <div class="website-block hero d-flex position-relative text-white text-center
    py-10 align-items-center" style="height: 15vh;">
            <div class="container py-0">
                <div class="display9">
                    <div class="py-4">
                        <h1 class="content-sec9"><?= $inv['couple_name']; ?></h1>
                        <h3 class="sub-content-sec9"><?= $inv['sub_judul']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section9">
        <div class="website-block hero d-flex position-relative text-white text-center
    py-10 align-items-center" style="height: 15vh;">
            <div class="container py-0">
                <div class="display9">
                    <div class="py-4">
                        <h1 class="content-sec9"><?= $inv['couple_name']; ?></h1>
                        <h3 class="sub-content-sec9"><?= $inv['sub_judul']; ?></h3>
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
            endtimeDate: 2,
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