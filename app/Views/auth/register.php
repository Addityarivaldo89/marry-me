<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-title" href="<?= base_url('/home'); ?>"><b>marry.me</b></a>
                        </div>
                    </nav>
                </div>
                <div class="login-wrapper my-auto">
                    <h1 class="login-title"><?= lang('Auth.register') ?></h1>

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form class="user" action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group mb-4 row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-block login-btn">
                            <?= lang('Auth.register') ?>
                        </button>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= route_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?><?= lang('Auth.signIn') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="<?= base_url(); ?>/img/b3.jpg" alt="login image" class="login-img">
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>