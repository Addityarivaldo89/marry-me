<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>Profil</b></h3>
          </div>
          <div class="card-body">
            <!-- profile -->
            <div class="col-md-9 personal-info">
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-lg-3 control-label">Nama Depan:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Nama Belakang:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Email:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Kata Sandi:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="password" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Konfirmasi Kata Sandi:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="password" value="">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary col-lg-8">Simpan</button>
              </form>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>