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
            <h1 class="display-4">Fiksi</h1>
        </div>
    </div>
  </selection>
  <!--akhir jumbotron-->
  
  <!--awal content-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-c" style="width: 13rem;">
          <img src="7.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">PEMROGRAMAN C++</h6>
            <h6 class="card-text">Kode Buku : 101</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-d" style="width: 13rem;">
          <img src="3.png" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">36 jam Belajar Komputer</h6>
            <h6 class="card-text">Kode Buku : 102</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-e" style="width: 13rem;">
          <img src="4.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">Paduan Design Pemula</h6>
            <h6 class="card-text">Kode Buku : 103</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-f" style="width: 13rem;">
          <img src="5.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">Belajar php7</h6>
            <h6 class="card-text">Kode Buku : 104</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-g" style="width: 13rem;">
          <img src="6.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">Teknokom STJ</h6>
            <h6 class="card-text">Kode Buku : 105</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-h" style="width: 13rem;">
          <img src="17.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">Pemrograman Dasar</h6>
            <h6 class="card-text">Kode Buku : 106</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2 mt-2">
        <div class="card-i" style="width: 13rem;">
          <img src="15.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">Desain Grafis</h6>
            <h6 class="card-text">Kode Buku : 107</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-5 mt-2">
        <div class="card-j" style="width: 13rem;">
          <img src="10.jpg" class="card-img-top" alt="gambar">
          <div class="card-body">
            <h6 class="card-title">Photoshop Cs3</h6>
            <h6 class="card-text">Kode Buku : 108</h6>
            <a href="pinjam.php" class="btn btn-primary">Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>
 
        
  <!--akhir content-->
  <!--awal pagination-->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item active"><a class="page-link" href="fiksi.php">1</a></li>
      <li class="page-item"><a class="page-link" href="fiksi1.php">2</a></li>
      <li class="page-item"><a class="page-link" href="fiksi2.php">3</a></li>
      <li class="page-item">
        <a class="page-link" href="fiksi1.php">Next</a>
      </li>
    </ul>
  </nav>
  <!--akhir pagination-->

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