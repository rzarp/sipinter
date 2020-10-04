<?php $this->load->view("templates/sidebar_eks") ?>
<?php $this->load->view("templates/navbar_eks") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">INPUT NO RESI DAN BIAYA</h1>

    <!-- DataTales Example -->
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No Order</th>
                    <th>Tanggal Order</th>
                    <th>Tanggal dan Jam Diterima Ekspedisi</th>
                    <th>Nama Pengirim</th>
                    <th>Nama Penerima</th>
                    <th>Up</th>
                    <th>Kode BC</th>
                    <th>Anggaran tersedia</th>
                    <th>Biaya</th>
                    <th>Kurir</th>
                    <th>No Resi</th>
                    <th>Diterima oleh Ekspedisi</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            CLC20/00001
                        </td>
                        <td>
                            20-Aug2020 ; 10:20:20
                        </td>
                        <td>
                           20-Aug-2020 ; 11:00:20
                        </td>
                        <td>
                            Agus Hendriawan
                        </td>
                        <td>
                            PT Cilacap Bercahaya
                        </td>
                        <td>
                            Bapak Hendriawan
                        </td>
                        <td>
                            10-43-01-06-4722-00-14-042-0- 0000-000000
                        </td>
                        <td>
                            3,000,000
                        </td>
                        <td>
                            5,000
                        </td>
                        <td>
                            Pos Indonesia
                        </td>
                        <td>
                            12345678
                        </td>
                        <td>
                            <a href="#"><span style="color: blue;"><i class="fas fa-check fa-sm"></i></span></a>
                        </td>
                        <td>
                            <a href="#"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
                            <a href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
                        </td>
                    </tr>
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
                            <form action="<?= base_url('unitkerja/add')?>" method="post">
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
<?php foreach ($unitkerja as $unitk) : ?>
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
                <div class="row">
                    <div class="col-sm-4" Style="border-right:1px solid;">
                        <a>Edit Data Unit Kerja</a>
                        <form action="<?php echo site_url('administrator/unitkerja/edit/' . $unitk->kodeUK) ?>" method="post">
                            <div class="form-group row">
                                <label>Kode Unit Kerja</label>
                                <input type="text" class="form-control" name="kode" value="<?= $unitk->kodeUK ?>">
                            </div>
                            <div class="form-group row">
                                <label>Nama Unit Kerja</label>
                                <input type="text" class="form-control" name="nama" value="<?= $unitk->namaUK?>">
                            </div>
                            <div class="form-group row">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $unitk->alamatUK?>">
                            </div>
                            <div class="form-group row">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control" name="kelurahan" value="<?= $unitk->kelurahan?>">
                            </div>
                            <div class="form-group row">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" value="<?= $unitk->kecamatan?>">
                            </div>
                            <div class="form-group row">
                                <label>Kabupaten/Kota</label>
                                <input type="text" class="form-control" name="kota" value="<?= $unitk->kota?>">
                            </div>
                            <div class="form-group row">
                                <label>Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" value="<?= $unitk->provinsi?>">
                            </div>
                            <div class="form-group row">
                                <label>Negara</label>
                                <input type="text" class="form-control" name="negara" value="<?= $unitk->negara?>">
                            </div>
                            <div class="form-group row">
                                <label>Kode Pos</label>
                                <input type="text" class="form-control" name="kodePos" value="<?= $unitk->kodePos?>">
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

                <?php endforeach ?>
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
        console.log(url);
        $('#modaleditdata').modal();
    }
</script>