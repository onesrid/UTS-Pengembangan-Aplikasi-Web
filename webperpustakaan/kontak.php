<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Perpustakaan Universitas Nusa Putra</title>
  </head>
  <body>
  <header>
    
      <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <div class="container">
        <img src="2.png" width=50px" height="50px" alt="">
        <a class="navbar-brand" href="#"><b>Perpustakaan Universitas Nusa Putra</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="fiksi.php">Fiksi</a>
                <a class="dropdown-item" href="nonfiksi.php">Non Fiksi</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Syarat
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
                <a class="dropdown-item" href="pengembalian.php">Pengembalian</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Profil</a>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Search</button>
          </form>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php">Logout</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
      </nav>
  </header>
  <!--awal jumbotron-->
  <selection class="jumbotron-bg">
      <div class="jumbotron warna-bg text-white">
        <div class="container">
        <h1 class="display-4">Kontak / Hubungi Kami</h1>
        </div>
    </div>
  </selection>
  <!--akhir jumbotron-->
  
  <!--awal content-->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-2">
          <div class="card-m mb-2">
            <h5><b>Jam Operasional</b></h5>
            <ul>
              <li><h6>Senin-kamis</h6> 
                <h6>Buka : Jam 09.00</h6>
                <h6>Istirahat : Jam 12.00 - 13.00</h6>
                <h6>Tutup : Jam 15.00</h6></li>
              <li><h6>Jum'at</h6> 
                <h6>Buka : Jam 09.00</h6>
                <h6>Tutup : Jam 11.00</h6></li>
              <li><h6>Sabtu</h6> 
                <h6>Buka : Jam 09.00</h6>
                <h6>Istirahat : Jam 12.00 - 13.00</h6>
                <h6>Tutup : Jam 15.00</h6></li>
            </ul>
            <h6><b>Informasi Kontak</b></h6>
            <h6><b>Alamat :</b></h6>
            <h6>Jl. Raya Cibatu Cisaat No.21, Cibolang Kaler, Kabupaten Sukabumi, 43155</h6>
            <h6><b>Phone Number :</b></h6>
            <h6>(0266) 210594</h6>


            
          </div>

        </div>
      <div class="col-md-6 mt-100">
        <div class="card-l">
          <div class="card-body">
            <div class="alert alert-primary" role="alert">
                Punya saran, pertanyaan, masukan, kritik, atau menemukan bugs di website ini?
              </div>
              <form action="" method="post">
 
                    Email<br>
                    <input type="email" name="email" size="73" required/></br>
                    Nama<br>
                    <input type="text" name="nama" size="73" required/></br>
                    Masukan<br>
                    <input type="text" name="masukan" size="73" required/></br>
                    <h4></h4>
                    <input type="submit" name="kirim" value="Kirim"/></br> 
                  </form>
                  <?php
                      if(isset($_POST['kirim'])){
                        include 'koneklogin.php';
                        $insert = mysqli_query($conn, "INSERT INTO tb_masukan VALUES
                            (NULL,
                                '".$_POST['email']."',
                                '".$_POST['nama']."',
                                '".$_POST['masukan']."')");
                        if($insert){
                          echo'Saran Telah Dikirim';
                        }else{
                          echo'Saran Gagal Dikirim text-primary';
                        }
                      }
                ?>
              </div>
            </div>
          </div>
      </div>
    </div>
 
        
  <!--akhir content-->

  <!--awal jumbotron2-->
  <div class="jumbotron-jumbotron">
    <div class="container">
    </div>
  </div>
  <!--akhir jumbotron2-->



  <!--awal footer-->
    <footer class="Copyright">
      <div class="text-white bg-primary text-center pt-2 pb-2">
        Copyright @2021 - UAS Pemograman Berorientasi Objek
      </div>
    </footer>
  <!--akhir footer-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>