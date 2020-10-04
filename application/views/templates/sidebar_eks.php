   <!-- Page Wrapper -->
   <div id="wrapper">

       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin">
               <div class="sidebar-brand-icon">
                   <img src="<?php echo base_url('assets/img/sucofindo.svg') ?>" alt="Si pintar" width="100" height="100">
               </div>

           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link" href="ekspedisi">
                   <i class="fas fa-fw fa-puzzle-piece"></i>
                   <span>Dashboard</span></a>
           </li>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
               <a class="nav-link" href="anggaran">
                   <i class="fas fa-fw fa-building"></i>
                   <span>Input Anggaran</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="data_user">
                   <i class="fas fa-fw fa-users"></i>
                   <span>Data User</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="data_penerima">
                   <i class="fas fa-fw fa-address-card"></i>
                   <span>Data Penerima</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="input_resi">
                   <i class="fas fa-fw fas fa-pencil-alt"></i>
                   <span>Input no resi & biaya</span>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="laporan_eks">
                   <i class="fas fa-fw fa-tasks"></i>
                   <span>Laporan Pengiriman</span>
               </a>
           </li>



           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Heading -->
           <div class="sidebar-heading">
               Account
           </div>

           <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                   <i class="fas fa-fw fa fa-key"></i>
                   <span>Logout</span>
               </a>
           </li>

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>

       </ul>
       <!-- End of Sidebar -->


       <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Untuk Logout?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logout" Untuk Keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-danger" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>