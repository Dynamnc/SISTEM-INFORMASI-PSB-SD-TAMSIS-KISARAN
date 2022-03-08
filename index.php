<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SD SWASTA TAMSIS KISARAN</title>
        <!-- <link rel="icon" type="assets/image/x-icon" href="assets/img/favicon.ico" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="index.php">PSB SD SWASTA TAMSIS KISARAN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">SISTEM INFORMASI PENDAFTARAN SISWA SD SWASTA TAMSIS KISARAN</h1>
                <p class="lead">Assalamu'alaikum wr.wb.</p>
                <p class="lead">Selamat datang di Halaman sistem informasi PSB SD SWASTA TAMSIS KISARAN. Berisi informasi seputar Penerimaan Siswa Baru Tahun Pelajaran 2022/2023.</p>
                <p class="lead">Sistem Informasi ini untuk membantu adminitrasi dan penerimaan siswa baru.</p>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12">
                        <h2>ABOUT</h2>
                        <center>
                            <img src="assets/img/sdn.png">
                        </center>
                        <br>
                       <center>
                           <b>SISTEM INFORMASI PENDAFTARAN SISWA BARU SD SWASTA TAMSIS KISARAN</b>
                       </center>
                       <center>
                           <p>Sistem Informasi Pendaftaran ini merupakan sebuah sistem informasi yang dirancang untuk membantu Administrasi sekolah dan panitia penerimaan siswa baru di SD SWASTA TAMSIS KISARAN.</p>
                       </center>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12">
                        <h2>Contact</h2>
                         <div class="row text-center text-md-left">
                          <div class="col-12 col-md-6 col-lg-3 grid-margin">
                            <div class="pt-2">
                              <h5 class="pb-2">Email</h5>
                              <p class="text-muted m-0">sdtamansiswa@gmail.com</p>
                            </div>         
                          </div>
                          <div class="col-12 col-md-6 col-lg-3 grid-margin">
                            <h5 class="pb-2">Alamat</h5>
                            <p class="text-muted">JL. HOS COKROAMINOTO NO. 341 KISARAN KISARAN BARAT, Kisaran Baru, Kec. Kisaran Barat, Kab. Asahan Prov. Sumatera Utara</p>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3 grid-margin">
                            <h5 class="pb-2">Kepala Sekolah</h5>
                            <p class="m-0 pb-2">Pahliono</p>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3 grid-margin">
                            <h5 class="pb-2">Kode Pos</h5>
                            <p class="m-0 pb-2">21214</p>
                          </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
         <!-- Modal for Contact - us Button -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Silahkan Login</h4>
            </div>
            <div class="modal-body">
             <form action="proses_login.php" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off"/ required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off"/ required>
                </div>
                  <div >
                    <button type="submit" name="login" value="login" class="btn btn-success">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
<?php } ?> 
      </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Sd Swasta Tamsis Kisaran 2021</p></div>
        </footer>
    </body>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
</html>
