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
        <h1 class="display-4">Pengembalian</h1>
        </div>
    </div>
  </selection>
  <!--akhir jumbotron-->

    <!--awal content-->
    <div class="container">
      <div class="row">
          <div class="col-md-12 mb-5">
            <div class="card-k">
                <div class="card-body">
                  <h2>Syarat Pengembalian Buku</h2>
                  <p>
                    <b> Ini adalah ketentuan pengembalian buku di perpustakaan Teknik Informatika :</b>
                  </p>
                    <ul>
                      <li> Anggota masuk ke ruangan perpustakaan membawa buku yang akan dikembalikan</li>
                      <li> Petugas mengambil kartu peminjaman terus meneliti buku yang akan dikembalikan, kemudian petugas memeriksa :</li>
                        <ul>
                          <li>jumlah halaman</li>
                          <li>kondisi buku ( rusak / tidak rusak )</li>
                          <li>batas waktu yang telah ditentukan</li>
                        </ul>
                      <li> Bilamana ada halaman yang kurang / rusak siswa disuruh memfoto copy, seperti buku yang dipinjam.</li>
                      <li> Bagi anggota yang merusakkan buku / dokumen :</li>
                        <ul>
                          <li>Mengganti buku yang sesuai</li>
                          <li>Mengganti buku dengan kompensasi pembayaran sesuai ketentuan</li>
                        </ul>
                      <li> Serahkan buku yang ingin diperpanjang bersama dengan KTM anda, sampaikan kalau anda ingin memperpanjang peminjaman buku tersebut. Petugas akan melihat data transaksi peminjaman buku tersebut.</li>
                      <li> Apabila anda telah memperpanjang peminjaman buku tersebut maka anda tidak dapat memperpanjang kembali peminjaman buku tersebut dan transaksi dianggap sebagai pengembalian.</li>
                      <li> Apabila masa peminjaman telah melewati batas lama peminjaman, maka anda akan dikenakan denda peminjaman. Serahkan uang denda sebesar yang disebutkan petugas.</li>
                      <li> Apabila proses pencatatan transaksi telah selesai, petugas akan menyerahkan buku bersama KTM anda.</li>
                    </ul>
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