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
                    <?php echo form_open_multipart('/invitation/store'); ?>
                    <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('success'))) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php } ?>
                        <div class="block">
                            <label>Upload Images</label>
                            <input type="file" name="gambar[]" class="form-control" accept="image/png, image/jpeg" multiple />
                            <input type="hidden" name="id_users" value="<?= user()->id; ?>">
                            <?php foreach ($dashboard as $d) : ?>
                                <input type="hidden" name="slug" value="<?= (old('slug')) ? old('slug') : $d->slug ?>">
                            <?php endforeach; ?>
                        </div>
                        <form action="/pengaturan">
                            <div class="form-group">
                                <label for="">Link Video Pre-Wedding</label>

                                <input type="link" class="form-control" name="link_youtube">
                                <?php foreach ($video as $v) : ?>
                                    <small id="" class="form-text text-muted">Link Videomu yang sudah terdaftar di sistem https://youtu.be/<b><?= (old('link_youtube')) ? old('link_youtube') : $v->link_youtube ?></b></small>
                                <?php endforeach; ?>

                                <small id="" class="form-text text-muted mt-5">Upload Videomu di Youtube terlebih dahulu <br> Contoh :
                                    https://youtu.be/<b>iT44pZmor3o</b> <br> Perhatikan Huruf yang dicetak tebal</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>