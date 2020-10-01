<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block">
              <img src="<?php echo base_url('assets/img/logo_login.jpeg')?>" alt="" width="500">
            </div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <img src="<?php echo base_url('assets/img/sucofindo.svg')?>" class="mb-3" alt="" width="100">
                </div>
                <form action="<?php echo base_url('login/aksi_login'); ?>" class="user" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                  </div>
                  <div class="text-right  mb-2">
                    <a href="#" class="small p-2">Lupa Password ?</a> 
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <p class="text-center small">Assembled @2020</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>