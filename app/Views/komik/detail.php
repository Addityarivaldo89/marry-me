<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/<?= $komik['sampul']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                    <p class="card-text"><b>Penulis : <?= $komik['penulis']; ?></b></p>
                    <p class="card-text"><small text-muted>Penerbit : <?= $komik['penerbit']; ?></small></p>

                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>

                    <form action="/komik/<?= $komik['id_komik']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>

                    <!-- <a href="/komik/delete/<?= $komik['id_komik']; ?>" class="btn btn-danger">Delete</a> -->
                    <br><br>
                    <a href="/komik">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>