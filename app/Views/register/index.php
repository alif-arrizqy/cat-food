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
        <form action="<?= base_url('Login/register_user') ?>" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">
            <div class="lock-image col-12 col-sm-5" style="background-image: url('public/dist/images/working.png')"></div>
            <div class="login-form col-12 col-sm-7">
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input class="form-control" type="username" name="username" id="username" required="" placeholder="Masukan username">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" required="" name="password" id="password" placeholder="Masukan password">
                </div>
                <div class="form-group mb-3">
                    <label for="username">Nama Lengkap</label>
                    <input class="form-control" type="fullname" name="fullname" id="fullname" required="" placeholder="Masukan nama lengkap">
                </div>
                <div class="form-group mb-3">
                    <label for="username">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required="" placeholder="Masukan email">
                </div>
                <div class="form-group mb-3">
                    <label for="username">No. Telepon</label>
                    <input class="form-control" type="mobile" name="mobile" id="mobile" required="" placeholder="Masukan mobile">
                </div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary" type="submit"> Daftar </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>