<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan Pengiriman</h1>

    <div class="ml-auto p-1 mb-1">
    <form class="form-inline">
        <label class="mr-sm-2" for="inlineFormCustomSelect">From Date</label>
        <input type="date" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        </input>
        <label class="mr-sm-2" for="inlineFormCustomSelect">To Date</label>
            <input type="date" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        </label>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> </button> 
        </form>
    </div>
    <!-- DataTales Example -->
     <div class="card-header ml-auto p-1 mb-3">
        <h6 class="mr-1 font-weight-bold text-primary">
            <a href="#" data-toggle="modal" data-target="#modaltambahdata" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Print</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Export Excel</a>
            <a href="#" class="d-none d-sm-inline-block ">
            <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </a>
        </h6>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Tanggal Order</th>
                    <th>Tanggal dan jam Diterima ekspedisi</th>
                    <th>Tanggal dan jam Diambil kurir</th>
                    <th>Nama Pengirim</th>
                    <th>Nama Penerima</th>
                    <th>Up</th>
                    <th>Perihal</th>
                    <th>Kode BC</th>
                    <th>Biaya</th>
                    <th>Telah diterima oleh</th>
                    <th>Diterima Tanggal</th>
                    <th>Status</th>
                    <th>Lacak</th>
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
                            ###
                        </td>
                        <td>
                            22 Agustus 2020
                        </td>
                        <td>Selesai</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modaleditdata"><span style="color: green;"><i class="fas fa-search m-2"></i></span></a>
                            <!-- <a onclick="deleteConfirm('<?php echo site_url('unitkerja/delete/' . $unitk->kodeUK) ?>')" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a> -->
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
                        <form action="<?php echo base_url('unitkerja/add') ?>" method="post">
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
</div>

<!-- Modal edi data -->
<div class="modal fade" id="modaleditdata" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4" Style="border-right:1px solid;">
                        <a>Edit Data Unit Kerja</a>
                        <form action="" method="post">
                            <div class="form-group row">
                                <label>Kode Unit Kerja</label>
                                <input type="text" class="form-control" name="kode" value="<?= base_url('unitkerja/edit' . ($unitkerja)) ?>">
                            </div>
                            <div class="form-group row">
                                <label>Nama Unit Kerja</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Unit Kerja">
                            </div>
                            <div class="form-group row">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group row">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                            </div>
                            <div class="form-group row">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                            </div>
                            <div class="form-group row">
                                <label>Kabupaten/Kota</label>
                                <input type="text" class="form-control" name="kota" placeholder="Kabupaten/Kota">
                            </div>
                            <div class="form-group row">
                                <label>Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                            </div>
                            <div class="form-group row">
                                <label>Negara</label>
                                <input type="text" class="form-control" name="negara" placeholder="Negara">
                            </div>
                            <div class="form-group row">
                                <label>Kode Pos</label>
                                <input type="text" class="form-control" name="kodePos" placeholder="Kode Pos">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Simpan" />
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                Keluar
                            </button>
                        </form>
                    </div>
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

<!--Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
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

    function edit(url) {
        $('#btn-edit').attr('href', url);
        $('#modaleditdata').modal();
    }
</script>