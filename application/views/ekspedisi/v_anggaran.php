<?php $this->load->view("templates/sidebar_eks") ?>
<?php $this->load->view("templates/navbar_eks") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Input Anggaran</h1>

    <!-- DataTales Example -->
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Kode BC</th>
                    <th>Input Anggaran</th>
                    <th>Relokasi Anggaran</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            Kode BC
                        </td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modalinputanggaran"><span style="color: blue;"><i class="fas fa-plus"></i></span></a>
                        </td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modalrelokasi"><span style="color: blue;"><i class="fas fa-edit"></i></span></a>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Modal tambah data -->
<div class="modal fade" id="modalinputanggaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Anggaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
        <div class="row">
            <div class="font-weight-bold col-md-3 mb-2">Nama Bulan</div>
            <div class="font-weight-bold col-md-3">Anggaran</div>
            <div class="font-weight-bold col-md-3">Nama Bulan</div>
            <div class="font-weight-bold col-md-3">Anggaran</div>
        </div>
        <div class="row">
            <div class="col-md-3">Januari</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
             <div class="col-md-3">Januari</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
         <div class="row">
            <div class="col-md-3">Februari</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">Februari</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
         <div class="row">
           <div class="col-md-3">Maret</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
           <div class="col-md-3">Maret</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
         <div class="row">
           <div class="col-md-3">April</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">April</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
        <div class="row">
           <div class="col-md-3">Mei</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">Mei</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
        <div class="row">
           <div class="col-md-3">Juni</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">Juni</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Simpan"/>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal modalrelokasi -->

<div class="modal fade" id="modalrelokasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Relokasi Anggaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
        
            <div class="row">
            <div class="font-weight-bold col-md-3 mb-2">Nama Bulan</div>
            <div class="font-weight-bold col-md-3">Anggaran</div>
            <div class="font-weight-bold col-md-3">Nama Bulan</div>
            <div class="font-weight-bold col-md-3">Anggaran</div>
        </div>
        <div class="row">
            <div class="col-md-3">Januari</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
             <div class="col-md-3">Januari</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
         <div class="row">
            <div class="col-md-3">Februari</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">Februari</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
         <div class="row">
           <div class="col-md-3">Maret</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
           <div class="col-md-3">Maret</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
         <div class="row">
           <div class="col-md-3">April</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">April</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
        <div class="row">
           <div class="col-md-3">Mei</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">Mei</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
        <div class="row">
           <div class="col-md-3">Juni</div>
            <div class="col-md-3"><input type="text" class="form-control" placeholder="Anggaran.."></div>
            <div class="col-md-3">Juni</div>
            <div class="col-md-3 mb-2"><input type="text" class="form-control" placeholder="Anggaran.."></div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Simpan"/>
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