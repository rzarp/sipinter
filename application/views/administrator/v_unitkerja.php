<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Unit Kerja</h1>

    <!-- DataTales Example -->
    <div class="card-header ml-auto p-1 mb-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="#" data-toggle="modal" data-target="#modaltambahdata" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Print</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Export Excel</a>
            <form class="form-inline d-none d-sm-inline-block mr-2">
                <input class="form-control mr-sm-2" type="search" aria-label="Search" placeholder="search"></input>
                <button class="btn btn-outline-primary mr-sm-2" type="search"><i class="fas fa fa-search"></i></button>
            </form>
        </h6>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Kode Unit Kerja</th>
                    <th>Nama Unit Kerja</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten/Kota</th>
                    <th>Propinsi</th>
                    <th>Negara</th>
                    <th>Kode Pos</th>
                    <th>Kode BC</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($unitKerja as $unitk) : ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $unitk->kodeUK ?>
                        </td>
                        <td>
                            <?= $unitk->namaUK ?>
                        </td>
                        <td>
                            <?= $unitk->alamatUK ?>
                        </td>
                        <td>
                            <?= $unitk->kelurahan ?>
                        </td>
                        <td>
                            <?= $unitk->kecamatan ?>
                        </td>
                        <td>
                            <?= $unitk->kota ?>
                        </td>
                        <td>
                            <?= $unitk->provinsi ?>
                        </td>
                        <td>
                            <?= $unitk->negara ?>
                        </td>
                        <td>
                            <?= $unitk->kodePos ?>
                        </td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#detailbc<?= $unitk->kodeUK; ?>">Detail</a>
                        </td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modaleditdata<?= $unitk->kodeUK; ?>"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
                            <a onclick="deleteConfirm('<?php echo site_url('administrator/unitkerja/delete/' . $unitk->kodeUK) ?>')" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Modal tambah data -->
<div class="modal fade" id="modaltambahdata" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Unit Kerja</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4" Style="border-right:1px solid;">
                            <form action="<?= base_url('administrator/unitkerja/add') ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Kode Unit Kerja</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kode" placeholder="Kode Unit Kerja">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Unit Kerja</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Unit Kerja">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Alamat</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Kelurahan</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Kecamatan</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Kabupaten/Kota</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kota" placeholder="Kabupaten/Kota">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Provinsi</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Negara</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="negara" placeholder="Negara">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Kode Pos</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kodePos" placeholder="Kode Pos">
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Simpan" />
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail BC -->
<?php foreach ($unitKerja as $unitk) : ?>
    <div class="modal fade" id="detailbc<?= $unitk->kodeUK; ?>" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kode BC</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col-sm-7 table-responsive-sm">
                            <table class="table table-sm table-bordered" style="font-size: smaller;">
                                <tr class="bg-primary text-white">
                                    <th>No</th>
                                    <th>Kode BC</th>
                                    <th>No</th>
                                    <th>Kode BC</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td>11</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td>12</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td>13</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td></td>
                                    <td>14</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td></td>
                                    <td>15</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td></td>
                                    <td>17</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td></td>
                                    <td>18</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td></td>
                                    <td>19</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td></td>
                                    <td>20</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- Modal edit data -->
<?php foreach ($unitKerja as $unitk) : ?>
    <div class="modal fade" id="modaleditdata<?= $unitk->kodeUK; ?>" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4" Style="border-right:1px solid;">
                                <form action="<?php echo site_url('administrator/unitkerja/edit/' . $unitk->kodeUK) ?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kode Unit Kerja</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="kode" value="<?= $unitk->kodeUK ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Nama Unit Kerja</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nama" value="<?= $unitk->namaUK ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="alamat" value="<?= $unitk->alamatUK ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kelurahan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="kelurahan" value="<?= $unitk->kelurahan ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kecamatan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="kecamatan" value="<?= $unitk->kecamatan ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kabupaten/Kota</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="kota" value="<?= $unitk->kota ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Provinsi</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="provinsi" value="<?= $unitk->provinsi ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Negara</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="negara" value="<?= $unitk->negara ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kode Pos</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="kodePos" value="<?= $unitk->kodePos ?>">
                                        </div>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Simpan" />
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!--Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<!--JS-->
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>