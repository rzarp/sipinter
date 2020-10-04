<?php $this->load->view("templates/sidebar_eks") ?>
<?php $this->load->view("templates/navbar_eks") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DATA PENERIMA</h1>

    <!-- DataTales Example -->
    <div class="card-header ml-auto p-1 mb-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="#" data-toggle="modal" data-target="#tambahdatapenerima" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
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
                    <th>Nama Penerima</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten/Kota</th>
                    <th>Propinsi</th>
                    <th>Negara</th>
                    <th>Kode Pos</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                           PT.Jaya Bersama 
                        </td>
                        <td>
                            Jl.S Parman No 15 rt 009 rw 13
                        </td>
                        <td>
                           Tegal rejo 
                        </td>
                        <td>
                            Cilacap Utara
                        </td>
                        <td>
                            Cilacap
                        </td>
                        <td>
                            Jawa Tengah
                        </td>
                        <td>
                            Indonesia
                        </td>
                        <td>
                            53211
                        </td>
                        
                        <td>
                            <a href="#" data-toggle="modal" data-target="#editdatapenerima"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
                            <a onclick="" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Modal tambah data -->
<div class="modal fade" id="tambahdatapenerima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penerima</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Penerima:</label>
            <input type="text" class="form-control" name="" placeholder="Nama Kurir">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat:</label>
            <input type="text" class="form-control" name="" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kelurahan:</label>
            <input type="text" class="form-control" name="" placeholder="Kelurahan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kecamatan:</label>
            <input type="text" class="form-control" name="" placeholder="Kecamatan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kabupaten/Kota:</label>
            <input type="text" class="form-control" name="" placeholder="Kabupaten/Kota">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Propinsi:</label>
            <input type="text" class="form-control" name="" placeholder="Propinsi">
          </div>
           <div class="form-group">
            <label for="message-text" class="col-form-label">Negara:</label>
            <input type="text" class="form-control" name="" placeholder="Negara">
          </div>
           <div class="form-group">
            <label for="message-text" class="col-form-label">Kode Pos:</label>
            <input type="number" class="form-control" name="" placeholder="Kode Pos">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Simpan" />
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal edi data -->
<div class="modal fade" id="editdatapenerima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penerima</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Penerima:</label>
            <input type="text" class="form-control" name="" placeholder="Nama Kurir">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat:</label>
            <input type="text" class="form-control" name="" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kelurahan:</label>
            <input type="text" class="form-control" name="" placeholder="Kelurahan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kecamatan:</label>
            <input type="text" class="form-control" name="" placeholder="Kecamatan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kabupaten/Kota:</label>
            <input type="text" class="form-control" name="" placeholder="Kabupaten/Kota">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Propinsi:</label>
            <input type="text" class="form-control" name="" placeholder="Propinsi">
          </div>
           <div class="form-group">
            <label for="message-text" class="col-form-label">Negara:</label>
            <input type="text" class="form-control" name="" placeholder="Negara">
          </div>
           <div class="form-group">
            <label for="message-text" class="col-form-label">Kode Pos:</label>
            <input type="number" class="form-control" name="" placeholder="Kode Pos">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Simpan" />
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
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
        console.log(url);
        $('#modaleditdata').modal();
    }
</script>