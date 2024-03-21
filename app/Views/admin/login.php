<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login | jeweler - Material Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- favicon
    ============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/admin/img/favicon.ico') ?>">
  <!-- Google Fonts
    ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <!-- Bootstrap CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/bootstrap.min.css') ?>">
  <!-- Bootstrap CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/font-awesome.min.css') ?>">
  <!-- owl.carousel CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/owl.carousel.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/admin/css/owl.theme.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/admin/css/owl.transitions.css') ?>">
  <!-- animate CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/animate.css') ?>">
  <!-- normalize CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/normalize.css') ?>">
  <!-- main CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/main.css') ?>">
  <!-- morrisjs CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/morrisjs/morris.css') ?>">
  <!-- mCustomScrollbar CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/scrollbar/jquery.mCustomScrollbar.min.css') ?>">
  <!-- metisMenu CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/metisMenu/metisMenu.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/admin/css/metisMenu/metisMenu-vertical.css') ?>">
  <!-- calendar CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/calendar/fullcalendar.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/admin/css/calendar/fullcalendar.print.min.css') ?>">
  <!-- forms CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/form/all-type-forms.css') ?>">
  <!-- style CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/style.css') ?>">
  <!-- responsive CSS
    ============================================ -->
  <link rel="stylesheet" href="<?= base_url('public/admin/css/responsive.css') ?>">
  <!-- modernizr JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="color-line"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="back-link back-backend">
          <!-- <a href="<?= base_url('/login') ?>index.php" class="btn btn-primary">Back to Login</a> -->
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
        <div class="text-center m-b-md custom-login">

          <img class="main-logo" src="<?= base_url('public/admin/img/logo/logo.png') ?>" alt="" style="height:100px" />
          <h4 class="mt-4">PLEASE LOGIN TO DASHBOARD</h4>
        </div>
        <div class="hpanel">
          <div class="panel-body">
            <?php if (isset($validation)): ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors() ?>
                </div>
              </div>
            <?php endif; ?>
            <form action="<?= base_url('login') ?>" method="POST" id="loginForm">
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="example@gmail.com" title="Please enter you username"
                  value="<?= set_value('username') ?>" required="" value="" name="username" id="username"
                  class="form-control">
                <!-- <span class="help-block small">Your unique username to app</span> -->
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" value=""
                  name="password" id="password" class="form-control">
                <!-- <span class="help-block small">Yur strong password</span> -->
              </div>
              <div class="custom-control custom-checkbox mr-sm-2">

                <input type="checkbox" class="custom-control-input" id="showPassword"> <label
                  class="custom-control-label" for="showPassword">
                  Show Password</label>
                <!-- <p class="help-block small">(if this is a private computer)</p> -->
              </div>
              <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
              <a class="btn btn-default btn-block" href="<?= base_url('/admin-register') ?>">Register</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <div class="row">
      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <p>Copyright &copy;
          <?= date('Y') ?> -
          <a href="">Elista (Gold & Diamonds)</a> All
          rights reserved.
        </p>
      </div>
    </div>
  </div>

  <!-- jquery
    ============================================ -->
  <script src="<?= base_url('public/admin/js/vendor/jquery-1.11.3.min.js') ?>"></script>
  <!-- bootstrap JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/bootstrap.min.js') ?>"></script>
  <!-- wow JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/wow.min.js') ?>"></script>
  <!-- price-slider JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/jquery-price-slider.js') ?>"></script>
  <!-- meanmenu JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/jquery.meanmenu.js') ?>"></script>
  <!-- owl.carousel JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/owl.carousel.min.js') ?>"></script>
  <!-- sticky JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/jquery.sticky.js') ?>"></script>
  <!-- scrollUp JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/jquery.scrollUp.min.js') ?>"></script>
  <!-- mCustomScrollbar JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
  <script src="<?= base_url('public/admin/js/scrollbar/mCustomScrollbar-active.js') ?>"></script>
  <!-- metisMenu JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/metisMenu/metisMenu.min.js') ?>"></script>
  <script src="<?= base_url('public/admin/js/metisMenu/metisMenu-active.js') ?>"></script>
  <!-- tab JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/tab.js') ?>"></script>
  <!-- icheck JS
    ============================================ -->
  <!-- <script src="<?= base_url('public/admin/js/icheck/icheck.min.js') ?>"></script>
  <script src="<?= base_url('public/admin/js/icheck/icheck-active.js') ?>"></script> -->
  <!-- plugins JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/plugins.js') ?>"></script>
  <!-- main JS
    ============================================ -->
  <script src="<?= base_url('public/admin/js/main.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    <?php if (session()->has('success')): ?>
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '<?= session('success') ?>',
      });
    <?php elseif (session()->has('error')): ?>
      Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: '<?= session('error') ?>',
      });
    <?php endif; ?>
  </script>

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
</body>

</html>