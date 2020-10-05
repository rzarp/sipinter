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
        <?php foreach ($penerima as $data) : ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?= $data->nama ?>
            </td>
            <td>
              <?= $data->alamat ?>
            </td>
            <td>
              <?= $data->kelurahan ?>
            </td>
            <td>
              <?= $data->kecamatan ?>
            </td>
            <td>
              <?= $data->kota ?>
            </td>
            <td>
              <?= $data->provinsi ?>
            </td>
            <td>
              <?= $data->negara ?>
            </td>
            <td>
              <?= $data->kodePos ?>
            </td>
            <td>
              <a href="#" data-toggle="modal" data-target="#modaleditdata<?= $data->idpenerima; ?>"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
              <a onclick="deleteConfirm('<?php echo site_url('ekspedisi/data_penerima/delete/' . $data->idpenerima) ?>')" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
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
        <form action="<?= base_url('ekspedisi/data_penerima/add') ?>" method="post">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Penerima:</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Penerima">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat:</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kelurahan:</label>
            <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kecamatan:</label>
            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kabupaten/Kota:</label>
            <input type="text" class="form-control" name="kota" placeholder="Kabupaten/Kota">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Propinsi:</label>
            <input type="text" class="form-control" name="provinsi" placeholder="Propinsi">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Negara:</label>
            <input type="text" class="form-control" name="negara" placeholder="Negara">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kode Pos:</label>
            <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos">
          </div>
          <input class="btn btn-primary" type="submit" value="Simpan" />
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal edi data -->
<?php foreach ($penerima as $data) : ?>
  <div class="modal fade" id="modaleditdata<?= $data->idpenerima; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penerima</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url('ekspedisi/data_penerima/edit/' . $data->idpenerima) ?>" method="post">
            <input type="hidden" name="id" value="<?= $data->idpenerima ?>" />
            <div class="form-group">
              <label for="message-text" class="col-form-label">Nama Penerima:</label>
              <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Alamat:</label>
              <input type="text" class="form-control" name="alamat" value="<?= $data->alamat ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Kelurahan:</label>
              <input type="text" class="form-control" name="kelurahan" value="<?= $data->kelurahan ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Kecamatan:</label>
              <input type="text" class="form-control" name="kecamatan" value="<?= $data->kecamatan ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Kabupaten/Kota:</label>
              <input type="text" class="form-control" name="kota" value="<?= $data->kota ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Propinsi:</label>
              <input type="text" class="form-control" name="provinsi" value="<?= $data->provinsi ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Negara:</label>
              <input type="text" class="form-control" name="negara" value="<?= $data->negara ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Kode Pos:</label>
              <input type="text" class="form-control" name="kodepos" value="<?= $data->kodePos ?>">
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" />
            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
          </form>
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
</script>