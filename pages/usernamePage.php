<?php
    include "../backend/login.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- More CSS -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/all.css">

    <title>Username please | Software Engineering</title>
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">OpenHouse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item btn btn-primary tombol" href="../index.php">Home</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Background -->
    <div class="main-bg login-page"></div>
    <div class="gradient-color login-gradient"></div>
    <!-- End Background -->

    <!-- Form -->
    <div class="form-login">
      <div class="container">
        <div class="row justify-content-center">
          <h1>Form Login Admin</h1>
          <form method="POST">
            <div class="form-row align-items-center">
              <div class="col-auto">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div> 
                  <input name="username"  autocomplete="off" type="text" class="form-control" placeholder="Masukkan Username">
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" name="log" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <?php if(isset($_POST["log"])): ?>
              <?php if($errorUser): ?>
                <p style="color: red; margin-top: 5px; font-style: italic;" class="col-auto text-center">
                  Username tidak dikenali !
                </p>
              <?php endif;?>
            <?php endif;?>
          </form>
        </div>
      </div>
    </div>





    <!-- End Form -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/all.js"></script>
  </body>
</html>