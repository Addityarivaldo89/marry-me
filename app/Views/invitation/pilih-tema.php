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
                      <img class="card-img-top" src="<?= base_url(); ?>/image/fall 6.jpeg" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large">Etnic Modern</h5>
                        <a href="<?= base_url('Etnic-Modern'); ?>" class="btn btn-link">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/fall 5.jpeg" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large">Rustic</h5>
                        <a href="<?= base_url('Rustic'); ?>" class="btn btn-link">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/fall 6.jpeg" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large">Astronomy</h5>
                        <a href="<?= base_url('Astronomy'); ?>" class="btn btn-link">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/fall 5.jpeg" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large">Green</h5>
                        <a href="<?= base_url('Green'); ?>" class="btn btn-link">Lihat Template</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="<?= base_url(); ?>/image/fall 6.jpeg" alt="Dist Photo 2">
                      <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-5 pt-2" style="font-weight: bold; font-size:large">Rose</h5>
                        <a href="<?= base_url('Rose'); ?>" class="btn btn-link">Lihat Template</a>
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