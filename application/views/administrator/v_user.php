<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data User</h1>

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
          <th>Asal Unit Kerja</th>
          <th>Privilege</th>
          <th>Nama User</th>
          <th>NPP</th>
          <th>Posisi Jabatan</th>
          <th>Email</th>
          <th>Password</th>
          <th>Kode BC</th>
          <th>Alamat Pengiriman</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        <?php foreach ($user as $data) : ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?= $data->asalUK ?>
            </td>
            <td>
              <?php if ($data->role == 1) {
                echo "Administrator";
              } else if ($data->role == 2) {
                echo "Ekspedisi";
              } else if ($data->role == 3) {
                echo "User";
              } ?>
            </td>
            <td>
              <?= $data->username ?>
            </td>
            <td>
              <?= $data->npp ?>
            </td>
            <td>
              <?= $data->posisi ?>
            </td>
            <td>
              <?= $data->email ?>
            </td>
            <td>
              <?= $data->password ?>
            </td>
            <td>
              <?= $data->kodeBC ?>
            </td>
            <td>
              <?= $data->alamat ?>
            </td>
            <td>
              <a href="#" data-toggle="modal" data-target="#modaleditdata<?= $data->idUser; ?>"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
              <a onclick="deleteConfirm('<?php echo site_url('administrator/user/delete/' . $data->idUser) ?>')" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('administrator/user/add') ?>" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Asal Unit Kerja:</label>
            <select class="custom-select mr-sm-2" name="asal" id="asal">
              <?= base_url('user') ?>
              <?php foreach ($unitKerja as $uk) : ?>
                <option value="<?= $uk->kodeUK ?>"><?= $uk->namaUK ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Privilege:</label>
            <select class="custom-select mr-sm-2" name="role" id="role">
              <option value="1">Administrator</option>
              <option value="2">Ekspedisi</option>
              <option value="3">User</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama User:</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama User">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">NPP:</label>
            <input type="text" class="form-control" name="npp" placeholder="NPP">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Posisi Jabatan:</label>
            <input type="text" class="form-control" name="posisi" placeholder="Posisi Jabatan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="text" class="form-control" name="pass" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kode Bc:</label>
            <select class="custom-select mr-sm-2" name="kodebc" id="kodebc">
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat Pengiriman:</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat Pengiriman">
          </div>
          <input class="btn btn-primary" type="submit" value="Simpan" />
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Modal Edit Data-->
<?php foreach ($user as $data) : ?>
  <div class="modal fade" id="modaleditdata<?= $data->idUser; ?>" role="dialog" aria-hidden="true">
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
              <form action="<?= base_url('administrator/user/edit') . $data->idUser ?>" method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Asal Unit Kerja:</label>
                  <select class="custom-select mr-sm-2" name="asal" id="asaled">
                    <option value="">- Pilih Unit Kerja -</option>
                    <?php foreach ($unitKerja as $uk) : ?>
                      <option value="<?= $uk->kodeUK ?>"><?= $uk->namaUK ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Privilege:</label>
                  <select class="custom-select mr-sm-2" name="role" id="role">
                    <option value="">- Pilih privilege -</option>
                    <option value="1">Administrator</option>
                    <option value="2">Ekspedisi</option>
                    <option value="3">User</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Nama User:</label>
                  <input type="text" class="form-control" name="nama" value="<?= $data->username ?>">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">NPP:</label>
                  <input type="text" class="form-control" name="npp" value="<?= $data->npp ?>">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Posisi Jabatan:</label>
                  <input type="text" class="form-control" name="posisi" value="<?= $data->posisi ?>">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Email:</label>
                  <input type="text" class="form-control" name="email" value="<?= $data->email ?>">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Password:</label>
                  <input type="text" class="form-control" name="pass" value="<?= $data->password ?>">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Kode Bc:</label>
                  <select class="custom-select mr-sm-2" name="kodebc" id="kodebced">
                  </select>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Alamat Pengiriman:</label>
                  <input type="text" class="form-control" name="alamat" value="<?= $data->alamat ?>">
                </div>
                <input class="btn btn-primary" type="submit" value="Simpan" />
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
              </form>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
  function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }

  $(document).ready(function() {
    $('#asal').change(function() {
      var values = $('#asal').val();
      console.log(values);
      if (values != '') {
        $.ajax({
          url: "<?= base_url('administrator/user/kode'); ?>",
          method: "POST",
          data: {
            kode: values
          },
          success: function(data) {
            $('#kodebc').html(data);
          }
        })
      }
    });
  });

  $(document).ready(function() {
    $('#asaled').change(function() {
      var values = $('#asaled').val();
      console.log(values);
      if (values != '') {
        $.ajax({
          url: "<?= base_url('administrator/user/kode'); ?>",
          method: "POST",
          data: {
            kode: values
          },
          success: function(data) {
            $('#kodebced').html(data);
          }
        })
      }
    });
  });
</script>