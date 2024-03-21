<!doctype html>
<html lang="en" class="semi-dark">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url('public/assets/images/favicon-32x32.png" type="image/png') ?>" />
  <!-- Bootstrap CSS -->
  <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet" />


  <link href="<?= base_url('public/assets/css/bootstrap-extended.css') ?>" rel="stylesheet" />
<link href="<?= base_url('public/assets/css/style.css') ?>" rel="stylesheet" />
<link href="<?= base_url('public/assets/css/icons.css') ?>" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="<?= base_url('public/assets/css/pace.min.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('public/assets/css/pace.min.css') ?>" rel="stylesheet" />
  <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body class="bg-surface">

  <!--start wrapper-->
  <div class="wrapper">

  <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="assets/images/brand-logo-2.png" width="140" alt=""/></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
              
                <div class="d-flex ms-3 gap-3">
                  <a href="<?= base_url('/signin') ?>" class="btn btn-primary btn-sm px-4 radius-30">Login</a>
                  <a href="#" class="btn btn-primary btn-sm px-4 radius-30">Register</a>
                </div>
              </div>
            </div>
          </nav>
       </header>
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container">
          <div class="mt-4">
            <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
              <div class="row g-0">
                <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
                  <img src="<?= base_url('public/assets/images/error/signin1.png') ?>" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-xl-4 order-xl-2">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Sign In</h5>
                    <p class="card-text mb-4">See your growth and get consulting support!</p>
                    <?php if (isset($validation)): ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors() ?>
                </div>
              </div>
            <?php endif; ?>
                    
                     <form  class="form-body" action="<?= base_url('/signin') ?>" method="POST" id="loginForm">
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email" name="email"  required>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" id="password"  name="password" placeholder="Password">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                              <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div>
                          </div>
                          <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                            </div>
                          </div>
                          </form>
                          <div class="col-12">
                            <div class="login-separater text-center"> <span></span>
                              <hr>
                            </div>
                          </div>
                          
                          <div class="col-12 text-center">
                            <p class="mb-0">Don't have an account yet? <a href="<?= base_url('/admin-signup') ?>">Sign up here</a></p>
                          </div>
                        </div>
                   
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

       <footer class="bg-white border-top p-3 text-center fixed-bottom">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
      </footer>

  </div>
  <!--end wrapper-->

 <!-- Bootstrap bundle JS -->
 <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>

<!--plugins-->
<script src="<?= base_url('public/assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('public/assets/js/pace.min.js') ?>"></script>


</body>

</html>