<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Data Kamu</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center">
                        <h4 class="card-title">Data Kamu</h4>
                    </div>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $data_user->fullname ?></td>
                                        <td><?= $data_user->username ?></td>
                                        <td><?= $data_user->email ?></td>
                                        <td><?= $data_user->mobile ?></td>
                                        <td>
                                            <center>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?= $data_user->id_user ?>">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $data_user->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('/main/edit_user/' . $data_user->id_user) ?>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input class="form-control" type="username" name="username" id="username" required="" value="<?= $data_user->username ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Nama Lengkap</label>
                    <input class="form-control" type="text" required="" name="fullname" id="fullname" value="<?= $data_user->fullname ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Email</label>
                    <input class="form-control" type="email" required="" name="email" id="email" value="<?= $data_user->email ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="password">No. Telepon</label>
                    <input class="form-control" type="text" required="" name="mobile" id="mobile" value="<?= $data_user->mobile ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>