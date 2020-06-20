<?php
    // Nyambungin ke file PHP sebagai perintah insert value
    include "backend/insert.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- More CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <title>Welcome | Software Engineering</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">OpenHouse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item btn btn-primary tombol" href="pages/usernamePage.php">I'm an Admin</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Background -->
    <div class="main-bg index-page"></div>
    <div class="gradient-color index-gradient"></div>
    <!-- End Background -->

    <!-- Konten -->
    <div class="container">
      <div class="row justify-content-between align-items-center konten">
        <div class="col-lg-6 col-sm-10">
          <div class="words text-left">
            <h1>Welcome to <span>Open house</span> smk negeri 1 kota cimahi</h1>
          </div>
        </div>
        <div class="col-lg-6 col-sm-10">
          <div class="panel">
            <h1>Form Kedatangan</h1>
              <form method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div> 
                      <input type="text" name="nameField"  autocomplete="off" required class="form-control" placeholder="Masukkan Nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <select name="statusComboBox" class="form-control">
                      <option value="Siswa SMKN 1 Cimahi">Siswa SMKN 1 Cimahi</option>
                      <option value="Alumni">Alumni</option>
                      <option value="Guru">Guru</option>
                      <option value="Warga Setempat">Warga Setempat</option>
                      <option value="Perusahaan">Perusahaan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                      </div> 
                      <input type="number" class="form-control" name="banyakField" required placeholder="Masukkan Banyak Pengunjung">
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Konten -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.js"></script>
  </body>
</html>