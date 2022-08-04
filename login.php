<?php
    require_once "_config/config.php";
    // melakukan verifikasi user apakah sudah login atau belum, jika sudah arahkan ke halaman index user
    if (isset($_SESSION['login'])) {
      echo "
          <script>
              alert('Anda Telah Login');
              window.location='".base_url('index')."';
          </script>            
      ";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- favicon -->
  
  <link rel="manifest" href="<?= asset("_assets/img/design/site.webmanifest") ?>">
  <link rel="mask-icon" href="<?= asset("_assets/img/design/safari-pinned-tab.svg") ?>" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>INVENTARIS - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= asset('_assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= asset('_assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <link href="<?= asset('_assets/css/style.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
   
                
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center  mb-4">
                      <h1 class="h4 text-gray-900 font-weight-bold">LOGIN</h1>
                      <span class="text-muted">Sistem Inventaris Barang Kantor Camat Pegasing</span>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('_config/proses_log') ?>?login">
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autocomplete="off" autofocus>
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                          <label class="custom-control-label" for="customCheck">Remember Me</label>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
                    </form>
                </div>
            </div>

            

           



  <!-- Bootstrap core JavaScript-->
  <script src="<?= asset('_assets/vendor/jquery/jquery.min.js') ?> "></script>
  <script src="<?= asset('_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= asset('_assets/vendor/jquery-easing/jquery.easing.min.js') ?> "></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= asset('_assets/js/sb-admin-2.min.js') ?> "></script>

</body>

</html>
