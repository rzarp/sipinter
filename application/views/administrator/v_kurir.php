<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Kurir</h1>

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
          <th>Nama Kurir</th>
          <th>Link</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        <?php foreach ($kurir as $data) : ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?= $data->nama ?>
            </td>
            <td>
              #
            </td>
            <td>
              <a href="#" data-toggle="modal" data-target="#modaleditdata<?= $data->id_kurir; ?>"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
              <a onclick="deleteConfirm('<?php echo site_url('administrator/kurir/delete/' . $data->id_kurir) ?>')" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal tambah data -->
<div class="modal fade" id="modaltambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kurir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('administrator/kurir/add') ?>" method="post">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kurir:</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Kurir">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Action:</label>
            <input type="text" class="form-control" name="npp" placeholder="Action">
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

<!-- Modal edit data -->
<?php foreach ($kurir as $data) : ?>
  <div class="modal fade" id="modaleditdata<?= $data->id_kurir; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kurir</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('administrator/kurir/edit/' . $data->id_kurir) ?>" method="post">
            <input type="hidden" name="id" value="<?= $data->id_kurir ?>" />
            <div class="form-group">
              <label for="message-text" class="col-form-label">Nama Kurir:</label>
              <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Action:</label>
              <input type="text" class="form-control" name="npp" placeholder="Action">
            </div>
        </div>
        <div class="modal-footer">
          <input class="btn btn-primary" type="submit" value="Simpan" />
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>

<!-- Modal Hapus -->
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


<!-- JS -->
<script>
  function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>