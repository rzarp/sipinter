<?php $this->load->view("templates/sidebar_eks") ?>
<?php $this->load->view("templates/navbar_eks") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DATA USER UNIT KERJA</h1>

    <!-- DataTales Example -->
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPP</th>
                    <th>Posisi Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Kode BC</th>
                    <th>Alamat Pengiriman</th>
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
                            <?= $data->username ?>
                        </td>
                        <td>
                            <?= $data->npp ?>
                        </td>
                        <td>
                            <?= $data->posisi ?>
                        </td>
                        <td>
                            <?= $data->asalUK ?>
                        </td>
                        <td>
                            <?= $data->kodeBC ?>
                        </td>
                        <td>
                            <?= $data->alamat ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->