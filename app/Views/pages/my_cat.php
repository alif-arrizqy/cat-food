<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Tabel Kucing Kamu</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-3">
                <div class="col-12 col-md-12 mt-3">
                    <div class="card">
                        <div class="card-body d-md-flex text-center">
                            <h5 class="card-title">Data Kucing Kamu</h5>
                            <a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event" data-toggle="modal" data-target="#addevent"><i class="icon-plus"></i> Tambah Kucing</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 mt-3">
                    <div class="card">
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
                                            <th>No</th>
                                            <th>Nama Kucing</th>
                                            <th>Usia Kucing (bulan)</th>
                                            <th>Berat Kucing (kg)</th>
                                            <th>Porsi Makan (gr)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data_cat as $dc) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $dc['cat_name'] ?></td>
                                                <td><?= $dc['age'] ?></td>
                                                <td><?= $dc['weight'] ?></td>
                                                <td><?= $dc['porsi'] ?></td>
                                                <td>
                                                    <center>
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?= $dc['id_cat'] ?>">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<!-- Modal -->
<?php foreach ($data_cat as $dc) { ?>
    <!-- Modal Add Cat -->
    <div id="addevent" class="modal fade" role="dialog">
        <div class="modal-dialog text-left">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="model-header">Tambah Kucing</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('/main/add_cat/' . $dc['id_user']) ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="start-date" class="">Nama Kucing</label>
                                <div class="d-flex event-title">
                                    <input id="cat_name" type="text" placeholder="Isi nama kucing kamu" class="form-control" name="cat_name">
                                    <input id="id_user" type="hidden" class="form-control" name="id_user" value="<?= $dc['id_user'] ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Usia Kucing</label>
                                <div class="d-flex">
                                    <input id="age_cat" placeholder="Isi usia kucing kamu" class="form-control" type="text" name="age">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Berat Kucing</label>
                                <div class="d-flex">
                                    <input id="weight_cat" placeholder="Isi berat kucing kamu" class="form-control" type="text" name="weight">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                    <button type="submit" id="add-event" class="btn btn-primary eventbutton">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <!-- End of Modal Add Cat -->
<?php } ?>
<?php
foreach ($data_cat as $dc) {
?>
    <!-- Modal Edit Cat -->
    <div class="modal fade" id="exampleModal<?= $dc['id_cat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('/main/edit_user/' . $dc['id_cat']) ?>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input class="form-control" type="username" name="username" id="username" required="" value="<?= $dc['id_cat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Nama Lengkap</label>
                        <input class="form-control" type="text" required="" name="fullname" id="fullname" value="<?= $dc['id_cat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Email</label>
                        <input class="form-control" type="email" required="" name="email" id="email" value="<?= $dc['id_cat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">No. Telepon</label>
                        <input class="form-control" type="text" required="" name="mobile" id="mobile" value="<?= $dc['id_cat'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <!-- End of Modal Edit Cat -->
<?php } ?>
<?= $this->endSection(); ?>