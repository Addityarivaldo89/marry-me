<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>BERANDA</b></h3>
          </div>
          <div class="card-body">
            <div class="col-md-4">
              <!-- Widget: user widget style 1 -->
              <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-success">
                  <h3 class="widget-user-username"><?= user()->username; ?></h3>
                  <h5 class="widget-user-desc">(jojo & jeje)</h5>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col">
                      <div class="description-block">
                        <h5 class="description-header">1</h5>
                        <span class="description-text">Pilihan Template</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="description-block">
                        <button class="btn btn-link" type="button">
                          link undangan
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg col-6">
                  <div class="small-box bg-light">
                    <div class="inner">
                      <h3>Rp. </h3>
                      <p>Tagihan Undanganmu </p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-file-invoice"></i>
                    </div>
                    <a href="<?= base_url('invoice'); ?>" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
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
</section>
<?= $this->endSection(); ?>