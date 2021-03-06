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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="data:;base64,iVBORwOKGO=" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/fall.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/util.css">
</head>

<body onload="setInterval(step,500)">
    <style>
        body {
            font-family: 'Lobster';
            font-family: 'Abril Fatface';
            font-family: Moonwake;
            src: url(../font/Moonwake/Moonwake.otf);
        }
    </style>
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-title" href="<?= base_url('/'); ?>"><b><?= $inv['couple_name']; ?></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left:30%">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#cover">Cover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#date">Date</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guestbook">Guest Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- header -->
    <section class="section1" id="cover">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display1">
                    <div class="py-4">
                        <h3 class="display1-sub-title" data-aos="fade-down" data-aos-delay="500">
                            <?php
                            $date   = new DateTime($inv['akad_date']); //this returns the current date time
                            $result = $date->format('d F Y');
                            if ($result) {
                                echo $result;
                            } else { // format failed
                                echo "Unknown Time";
                            }
                            ?>
                        </h3>
                        <h1 class="display1-title" data-aos="zoom-in" data-aos-delay="500"><?= $inv['couple_name']; ?></h1>
                        <h3 class="display1-quote" data-aos="fade-up" data-aos-delay="500">"when i feel in love it will be forever."</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- couple name display -->
    <section class="section2" id="profile">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display2">
                    <div class="py-4">
                        <h3 class="description" data-aos="fade-down" data-aos-delay="500">
                            Together With Their Families
                        </h3>
                        <h3 class="display1-quote" data-aos="fade-up" data-aos-delay="500" data-aos="fade-up" data-aos-delay="500">"completely and perfectly incandescently happy"</h3>
                        <div class="container">
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/img/user-upload/<?= $inv['foto_p']; ?>" alt="pengentin pria" style="width: 200px; align-item:center" data-aos="zoom-out-left" data-aos-delay="800">
                                    <div class="card-body">
                                        <h5 class="card-title-couple" data-aos="fade-down" data-aos-delay="500"><?= $inv['pria']; ?></h5>
                                        <p class="card-text-couple my-2" data-aos="fade-down" data-aos-delay="700">Son of </br> <?= $inv['ayah_p']; ?> & <?= $inv['ibu_p']; ?></p>
                                        <a data-aos="fade-down" data-aos-delay="900" href="https://www.instagram.com/<?= $inv['instagram_w']; ?>" target="__blank"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/img/user-upload/<?= $inv['foto_w']; ?>" alt="pengentin pria" style="width: 200px; align-item:center" data-aos="zoom-out-right" data-aos-delay="800">
                                    <div class="card-body">
                                        <h5 class="card-title-couple" data-aos="fade-down" data-aos-delay="500"><?= $inv['wanita']; ?></h5>
                                        <p class="card-text-couple my-2" data-aos="fade-down" data-aos-delay="700">Daughter of </br> <?= $inv['ayah_w']; ?> & <?= $inv['ibu_w']; ?></p>
                                        <a data-aos="fade-down" data-aos-delay="900" href="https://www.instagram.com/<?= $inv['instagram_w']; ?>" target="__blank"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery -->
    <section class="section3" id="galeri">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="w-100 py-0">
                <div class="flexbin">
                    <?php foreach ($gallery as $g) : ?>
                        <?php if ($g->gambar != null) { ?>
                            <a href="<?= base_url(); ?>/uploads/<?= $g->slug; ?>/<?= $g->gambar; ?>" data-aos="zoom-in">
                                <img src="<?= base_url(); ?>/uploads/<?= $g->slug; ?>/<?= $g->gambar; ?>">
                            </a>
                        <?php } else ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- location -->
    <section class="section4">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display4">
                    <h3 class="location-description" data-aos="fade-down">
                        Our Wedding Place
                    </h3>
                    <h3 class="location-quote" data-aos="fade-up" data-aos-delay="500" data-aos="fade-up">"Anywhere with you, is everywhere i want to be"</h3>
                    <div class="container">
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header-location">
                                    <h4 class="my-0 location-title" data-aos="fade-down">Akad Nikah</h4>
                                </div>
                                <div class="card-body">
                                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $inv['alamat_akad']; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" data-aos="zoom-in"></iframe>
                                    <p class="card-text">
                                        <?php
                                        $date   = new DateTime($inv['akad_date']); //this returns the current date time
                                        $result = $date->format('H.i');
                                        echo '<b>' . $result . " WIB<br></b>";
                                        ?>
                                    </p>
                                    <h1 class="card-title pricing-card-title" data-aos="fade-up"><?= $inv['alamat_akad']; ?></h1>
                                </div>
                            </div>
                            <div class="card mb-4 box-shadow">
                                <div class="card-header-location">
                                    <h4 class="my-0 location-title" data-aos="fade-down">Resepsi</h4>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $inv['alamat_resepsi']; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" data-aos="zoom-in"></iframe>
                                    <p class="card-text">
                                        <?php
                                        $date   = new DateTime($inv['resepsi_date']); //this returns the current date time
                                        $result = $date->format('H.i');
                                        echo '<b>' . $result . " WIB<br></b>";
                                        ?></p>
                                    <h1 class="card-title pricing-card-title" data-aos="fade-up"><?= $inv['alamat_resepsi']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- countdown -->
    <section class="section5" id="date">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display5">
                    <div class="py-4">
                        <div class="size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15">
                            <div class="wsize1">
                                <h3 class="countdown-sub-title" data-aos="fade-down">
                                    <?php
                                    $date   = new DateTime($inv['akad_date']); //this returns the current date time
                                    $result = $date->format('d F Y H.i');
                                    if ($result) {
                                        echo $result . 'WIB';
                                    } else { // format failed
                                        echo "Unknown Time";
                                    }
                                    ?>
                                </h3>
                                <h3 class="l1-txt1 txt-center p-b-20" style="font-family: Abril Fatface;" data-aos="zoom-in">
                                    Our Special Day
                                </h3>
                                <p class="txt-center m2-txt1 p-b-67 countdown-description" style="font-family: Moonwake; font-size: 30px; color: #96492D; font-weight: bolder" data-aos="fade-up">
                                    "a million times over, i will always choose you."
                                </p>
                                <div class=" flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="30">
                                    <p id="demo"></p>
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
                            <?php
                            foreach ($link as $links) : ?>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $links->link_youtube; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- guestbook -->
    <section class="section7" id="guestbook">
        <div class="website-block hero d-flex position-relative text-white text-center py-10 align-items-center">
            <div class="container py-0">
                <div class="display7">
                    <div class="display7-title">
                        <h1> Guestbook </h1>
                    </div>

                    <form action="/invitation/tamuCreate" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <?php foreach ($link as $d) : ?>
                            <input type="hidden" name="id_users" value="<?= $d->id_users; ?>">
                            <input type="hidden" name="slug" value="<?= (old('slug')) ? old('slug') : $d->slug ?>">
                        <?php endforeach; ?>

                        <div class="form-group">
                            <div class="name"><label for="name">Nama Tamu</label></div>
                            <input type="text" name="nama_tamu" placeholder="Masukkan Nama Anda" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <div class="wish"><label for="exampleFormControlTextarea1">Pesan untuk kedua mempelai</label></div>
                            <input type="text" name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="9"></input>
                        </div>
                        <div class="button-kirim">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- messages -->
    <div class="section8">
        <div class="container">
            <div class="display8">
                <div class="box box-2">
                    <div class="comment">
                        <div class="comment-content col-md-11 col-sm-10">
                            <h6 class="small comment-meta"></h6>
                            <div class="comment-body">
                                <?php foreach ($tamu as $d) : ?>
                                    <div class="card-comment">
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

    <!-- footer -->
    <section class="section9">
        <div class="website-block hero d-flex position-relative text-white text-center
    py-10 align-items-center" style="height: 15vh;">
            <div class="container py-0">
                <div class="display9">
                    <div class="py-4">
                        <h1 class="content-sec9">"you are my sun, my moon, and all my stars."</h1>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/moment.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/countdowntime/countdowntime.js"></script>
    <script>
        // Mengatur waktu akhir perhitungan mundur
        var countDownDate = new Date("<?= $inv['akad_date']; ?>").getTime();

        // Memperbarui hitungan mundur setiap 1 detik
        var x = setInterval(function() {

            // Untuk mendapatkan tanggal dan waktu hari ini
            var now = new Date().getTime();

            // Temukan jarak antara sekarang dan tanggal hitung mundur
            var distance = countDownDate - now;

            // Perhitungan waktu untuk hari, jam, menit dan detik
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Keluarkan hasil dalam elemen dengan id = "demo"
            document.getElementById("demo").innerHTML = '<span class="l1-txt2">' + days + '</span>Days </div>' + '<span class="l1-txt2 p-b-22"> : </span>' + '<span class="l1-txt2">' + hours + '</span>Hours </div>' + '<span class="l1-txt2 p-b-22"> : </span>' + '<span class="l1-txt2">' + minutes + '</span>Minutes </div>' + '<span class="l1-txt2 p-b-22"> : </span>' + '<span class="l1-txt2">' + seconds + '</span>Seconds </div>';

            // document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            //     minutes + "m " + seconds + "s ";

            // Jika hitungan mundur selesai, tulis beberapa teks 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <!-- <script>
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
    </script> -->
    <script src="<?= base_url(); ?>/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>
<script>
</script>