<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data User</h1>

    <!-- DataTales Example -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="#" data-toggle="modal" data-target="#modaltambahdata" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Print</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Export Excel</a>
        </h6>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Asal Unit Kerja</th>
                    <th>Nama User</th>
                    <th>Npp</th>
                    <th>Posisi Jabatan</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Kode Bc</th>
                    <th>Alamat Pengiriman</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                       
                    </tr>
                
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal tambah data -->
<div class="modal fade" id="modaltambahdata" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
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
                </div>
            </div>
        </div>
    </div>
</div>