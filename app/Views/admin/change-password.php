<?php include('includes/header.php') ?>

<?php include('includes/navside.php') ?>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo-pro">
          <a href="index.html"><img class="main-logo" src="img/logo/logo1.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/navtop.php') ?>
  <div class="breadcome-area">
    <div class="container-fluid">
      <div class="row" style="background-color: #ffd8d8;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcome-list single-page-breadcome">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="breadcome-heading">
                  <!-- <form role="search" class="">
                          <input
                            type="text"
                            placeholder="Search..."
                            class="form-control"
                          />
                          <a href=""><i class="fa fa-search"></i></a>
                        </form> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <ul class="breadcome-menu">
                  <li>
                    <a href="#">Home</a>
                    <span class="bread-slash">/</span>
                  </li>
                  <li><span class="bread-blod">Change Password</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->

<div class="basic-form-area mg-tb-15">
  <div class="container-fluid">
    <div class="row justify-content-center">

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline9-list responsive-mg-b-30">
          <div class="sparkline9-hd">
            <!-- <div class="main-sparkline9-hd">
              <h1>Horizontal Login <span class="basic-ds-n">Form</span></h1>
            </div> -->
          </div>
          <div class="sparkline9-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <!-- <div class="login-social-inner">
                    <a href="#" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i
                          class="fa fa-facebook"></i></span> Facebook </a>
                    <a href="#" class="button btn-social basic-ele-mg-b-10 twitter span-left"> <span><i
                          class="fa fa-twitter"></i></span> Twitter </a>
                  </div> -->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="basic-login-inner">
                    <h3>Admin Details</h3>
                    <!-- <p>Register User can get sign in from here</p> -->
                    <form action="<?= base_url('/changepassword') ?>" method="POST">
                      <?php if (isset($validation)): ?>
                        <div class="col-12">
                          <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="login2">Username</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control" value="<?= session()->get('username') ?>"
                              name="username" readonly />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="login2">Email</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="email" class="form-control" value="<?= session()->get('email') ?>" name="email"
                              readonly />
                          </div>
                        </div>
                      </div>
                      <hr>
                      <p class="text-center text-secondary h4 font-weight-bold mb-3">Change your password here</p>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="login2">Old Password</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="password" class="form-control" name="old-password" placeholder="password"
                              id="oldPassword" />
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="i-checks">
                              <input type="checkbox" class="" id="showOldPassword"> <label class="" for="showPassword">
                                Show Password</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="login2">New Password</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="password" class="form-control" name="new-password" placeholder="password"
                              id="password" />
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="i-checks">
                              <input type="checkbox" class="" id="showPassword"> <label class="" for="showPassword">
                                Show Password</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label class="login2">Confirm New Password</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="password" class="form-control" name="cnew-password" placeholder="password" />
                          </div>
                        </div>
                      </div>
                      <div class="login-btn-inner">
                        <!-- <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="i-checks">
                              <label>
                                <input type="checkbox"><i></i> Remember me </label>
                            </div>
                          </div>
                        </div> -->
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="login-horizental">
                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Change
                                Password</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ?>
</div>

<?php include('includes/script.php') ?>
<script>
  //  -----show password------
  $("#showPassword").click(function () {
    if ("password" == $("#password").attr("type")) {
      $("#password").prop("type", "text");
    } else {
      $("#password").prop("type", "password");
    }
  });
</script>
<script>
  //  -----show password------
  $("#showOldPassword").click(function () {
    if ("password" == $("#oldPassword").attr("type")) {
      $("#oldPassword").prop("type", "text");
    } else {
      $("#oldPassword").prop("type", "password");
    }
  });
</script>