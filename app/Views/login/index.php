<?= $this->extend('login_layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row vh-100 justify-content-between align-items-center">
    <div class="col-12">
        <!-- alert -->
        <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
            <div class="alert alert-warning">
                <?php echo session()->getFlashdata('gagal') ?>
            </div>
        <?php } ?>
        <?php if (!empty(session()->getFlashdata('sukses'))) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('sukses') ?>
            </div>
        <?php } ?>
        <form action="<?= base_url('Login/cek_login') ?>" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">
            <div class="lock-image col-12 col-sm-5" style="background-image: url('public/dist/images/working.png')"></div>
            <div class="login-form col-12 col-sm-7">
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input class="form-control" type="username" name="username" id="username" required="" placeholder="Enter your username">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" required="" name="password" id="password" placeholder="Enter your password">
                </div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary" type="submit"> Log In </button>
                </div>
                <!-- <div class="mt-2">Don't have an account? <a href="page-register.html">Create an Account</a></div> -->
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>