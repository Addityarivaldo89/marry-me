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

        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Form Upload Foto Gallery</b></h3>
                    </div>
                    <div class="card-body">
                        <div class="block">
                            <label class="button" for="images">Upload Images</label>
                            <input type="file" id="images[]" multiple />
                        </div>
                        <form action="/pengaturan">
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
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>