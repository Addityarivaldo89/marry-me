<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-title" href="<?= base_url('/'); ?>"><b>marry.me</b></a>
                        </div>
                    </nav>
                </div>
                <div class="login-wrapper my-auto">
                    <h1 class="login-title"><?= lang('Auth.loginTitle') ?></h1>

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('login') ?>" class="user" method="post">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <input type="text" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" value="<?= old('email') ?>" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="email@example.com">
                            </div>
                        <?php endif; ?>

                        <div class="form-group mb-4">
                            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                        </div>

                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" name="remembering" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <label for="customCheck" class="custom-control-label">Remember Me</label>
                                </div>
                            </div>
                        <?php endif; ?>

                        <button class="btn btn-block login-btn" type="submit">
                            <?= lang('Auth.loginAction') ?>
                        </button>
                    </form>
                    <?php if ($config->activeResetter) : ?>
                        <div class="text-center">
                            <a class="small" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
                        </div>
                    <?php endif; ?>

                    <?php if ($config->allowRegistration) : ?>
                        <div class="text-center">
                            <a class="small" href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="<?= base_url(); ?>/img/b3.jpg" alt="login image" class="login-img">
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>