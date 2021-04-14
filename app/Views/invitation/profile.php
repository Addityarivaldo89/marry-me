<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>My Profil</b></h3>
          </div>
          <div class="card-body">
            <!-- profile -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?= user()->username; ?></h5>
                    <p class="card-text"><?= user()->email; ?></p>
                    <?php foreach ($dashboard as $d) : ?>
                      <p class="card-text"><small class="text-muted">Link Undangan <br> <?= base_url(); ?>/inv/<?= $d->slug ?></small></p>
                    <?php endforeach; ?>
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