<?php
    // Nyambungin ke file PHP sebagai perintah insert value
    include "../../backend/insert.php";

    // Nyambungin ke file PHP sebagai status counter
    include "../../backend/statusCounter.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <!-- More CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <link rel="stylesheet" href="../../assets/css/datatables.css">

    <title>Hello Admin | Software Engineering</title>
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
                <button type="button" class="btn btn-primary tombol" data-toggle="modal" data-target="#confirmKeluarAdmin">
                    Log Out
                </button>
            </div>
          </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Background -->
    <div class="jumbotron jumbotron-fluid admin-bg">
        <div class="container button-jumbotron">
          <h1 class="display-4">welcome, <span>admin</span></h1>
          <small>
              <?php
                echo $date;
              ?>
          </small>
        </div>
      </div>

    <div class="admin-gradient-color"></div>
    <!-- End Background -->

    <!-- Panel -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 admin-panel">
                <div class="row">
                    <div class="col-lg">
                      <div class="row justify-content-center keterangan">
                        <div class="col-12 text-center">
                            <h3>Day 1</h3>
                        </div>
                      </div>
                      <div class="row justify-content-center jumlah">
                        <div class="col-12 text-center">
                            <h1>
                                <?php echo $jumday1; ?>
                            </h1>
                        </div>
                      </div>
                      <div class="row justify-content-center date-event">
                        <div class="col-12 text-center">
                            <small>
                                <?php
                                    echo $dayi;
                                ?>
                            </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg">
                        <div class="row justify-content-center keterangan">
                            <div class="col-12 text-center">
                                <h3>Day 2</h3>
                            </div>
                          </div>
                          <div class="row justify-content-center jumlah">
                            <div class="col-12 text-center">
                                <h1><?php echo $jumday2; ?></h1>
                            </div>
                          </div>
                          <div class="row justify-content-center date-event">
                            <div class="col-12 text-center">
                                <small>
                                    <?php
                                        echo $dayii;
                                    ?>
                                </small>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg">
                        <div class="row justify-content-center keterangan">
                            <div class="col-12 text-center">
                                <h3>Day 3</h3>
                            </div>
                          </div>
                          <div class="row justify-content-center jumlah">
                            <div class="col-12 text-center">
                                <h1><?php echo $jumday3; ?></h1>
                            </div>
                          </div>
                          <div class="row justify-content-center date-event">
                            <div class="col-12 text-center">
                                <small>
                                    <?php
                                        echo $dayiii;
                                    ?>
                                </small>
                            </div>
                          </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End Panel  -->
    <!-- Konten Admin -->
    <div class="konten-admin">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        <!-- Tombol -->
                        <p>
                            <button class="btn btn-primary tombol" type="button" data-toggle="collapse" data-target="#tabelD1" aria-expanded="false" aria-controls="collapseExample">
                                Table Day 1
                            </button>
                            <button class="btn btn-primary tombol" type="button" data-toggle="collapse" data-target="#tabelD2" aria-expanded="false" aria-controls="collapseExample">
                                Table Day 2
                            </button>
                            <button class="btn btn-primary tombol" type="button" data-toggle="collapse" data-target="#tabelD3" aria-expanded="false" aria-controls="collapseExample">
                                Table Day 3
                            </button>
                        </p>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 isi-konten-admin">
                            <!-- Tabel Hari 1 -->
                            <div class="collapse show" id="tabelD1">
                                <div class="card card-body">
                                <table class="table table-striped table-hover datatabel">
                                     <caption>Table Day 1</caption>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date & Time</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($totald1!=0){
                                            $i=1;
                                            while($row1 = mysqli_fetch_array($call1)){
                                    ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                                <td><?php echo $row1["nama"] ?></td>
                                                <td><?php echo $row1["status"] ?></td>
                                                <td><?php echo $row1["datetime"] ?></td>
                                            </tr>
                                    <?php   
                                        $i++; 
                                        }
                                    } else {
                                        ?>
                                        <tr>    
                                                <td colspan="4" class="text-center"><small style="color: red;">The table is unavailable</small></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- Tabel Hari 2 -->
                            <div class="collapse show" id="tabelD2">
                                <div class="card card-body">
                                <table class="table table-striped table-hover datatabel">
                                     <caption>Table Day 2</caption>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date & Time</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($totald2!=0){
                                            $i=1;
                                            while($row2 = mysqli_fetch_array($call2)){
                                    ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                                <td><?php echo $row2["nama"] ?></td>
                                                <td><?php echo $row2["status"] ?></td>
                                                <td><?php echo $row2["datetime"] ?></td>
                                            </tr>
                                    <?php   
                                        $i++; 
                                        }
                                    } else {
                                        ?>
                                        <tr>    
                                                <td colspan="4" class="text-center"><small style="color: red;">The table is unavailable</small></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- Tabel Hari 3 -->
                            <div class="collapse" id="tabelD3">
                                <div class="card card-body">
                                <table class="table table-striped table-hover datatabel">
                                     <caption>Table Day 3</caption>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date & Time</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($totald3!=0){
                                            $i=1;
                                            while($row3 = mysqli_fetch_array($call3)){
                                    ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                                <td><?php echo $row3["nama"] ?></td>
                                                <td><?php echo $row3["status"] ?></td>
                                                <td><?php echo $row3["datetime"] ?></td>
                                            </tr>
                                    <?php   
                                        $i++; 
                                        }
                                    } else {
                                        ?>
                                        <tr>    
                                                <td colspan="4" class="text-center"><small style="color: red;">The table is unavailable</small></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center input-date">
                        <div class="col-md-12 col-lg-12 col-sm-10">
                            <div class="card border-dark mb-3" style="max-width: 100%;">
                                <div class="card-header">The Date of Event</div>
                                <div class="card-body text-dark">
                                    <form method="POST">
                                    <label for="dateField">Enter the first date of Event below</label>
                                        <div class="form-group form-row">
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                    </div> 
                                                    <input type="date" name="dateField" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" name="submit-date" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <small class="text-danger">
                                            <?php
                                                echo $words;
                                            ?>
                                        </small>
                                    </form>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 info-status">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Siswa SMKN 1 Cimahi</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <small>D-1</small>
                                    <h5 class="card-title text-center"><?php echo $tsiswa1; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-2</small>
                                    <h5 class="card-title text-center"><?php echo $tsiswa2; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-3</small>
                                    <h5 class="card-title text-center"><?php echo $tsiswa3; ?></h5>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Alumni</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <small>D-1</small>
                                    <h5 class="card-title text-center"><?php echo $talumni1; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-2</small>
                                    <h5 class="card-title text-center"><?php echo $talumni2; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-3</small>
                                    <h5 class="card-title text-center"><?php echo $talumni3; ?></h5>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Guru</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <small>D-1</small>
                                    <h5 class="card-title text-center"><?php echo $tguru1; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-2</small>
                                    <h5 class="card-title text-center"><?php echo $tguru2; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-3</small>
                                    <h5 class="card-title text-center"><?php echo $tguru3; ?></h5>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Warga Setempat</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <small>D-1</small>
                                    <h5 class="card-title text-center"><?php echo $twarga1; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-2</small>
                                    <h5 class="card-title text-center"><?php echo $twarga2; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-3</small>
                                    <h5 class="card-title text-center"><?php echo $twarga3; ?></h5>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Perusahaan</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <small>D-1</small>
                                    <h5 class="card-title text-center"><?php echo $tper1; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-2</small>
                                    <h5 class="card-title text-center"><?php echo $tper2; ?></h5>
                                </div>
                                <div class="col text-center">
                                    <small>D-3</small>
                                    <h5 class="card-title text-center"><?php echo $tper3; ?></h5>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Konten Admin -->

    <!-- Modal -->
    <div class="modal fade" id="confirmKeluarAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Confirm</h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    Are you sure want to exit from Admin page ?
                </div>
                <div class="modal-footer">
                    <a href="../../index.php" type="button" class="btn btn-primary">Yes</a>
                    <a style="color: white;" type="button" class="btn btn-secondary" data-dismiss="modal">No</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Footer -->
    <div class="footer text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p>Open House 2020 &copy; | Software Engineering</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/popper.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/datatables.js"></script>
    <script>
        $(document).ready(function(){
            $(".datatabel").DataTable({
                "pageLength": 5,
                "lengthChange": false,
                "searching": false
            });
        });
    </script>
  </body>
</html>