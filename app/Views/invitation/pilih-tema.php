<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>DESCRIPTION</b></h3>
          </div>
          <div class="card-body">
            <div class="card card-success">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/etnic.png" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large; color:white">Etnic Modern</h5>
                        <a href="<?= base_url('/Etnic-Modern'); ?>" target="_blank" class="btn btn-light">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/rustic.png" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large; color:white">Rustic</h5>
                        <a href="<?= base_url('/Rustic'); ?>" target="_blank" class="btn btn-light">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/astronomy.png" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large ; color:white">Astronomy</h5>
                        <a href="<?= base_url('Astronomy'); ?>" target="_blank" class="btn btn-light">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/green.png" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large; color:white">Green</h5>
                        <a href="<?= base_url('Green'); ?>" target="_blank" class="btn btn-light">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/rose.png" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large; color:white">Rose</h5>
                        <a href="<?= base_url('Rose'); ?>" target="_blank" class="btn btn-light">Lihat Template</a>
                      </div>
                    </div>
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