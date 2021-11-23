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

<!-- Image and text -->

<nav class="navbar navbar-light bg-primary">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="LOGO_NSP.png" width="80px" height="80px" class="d-inline" alt="">
      Perpustakaan Universitas Nusa Putra
    </a>
</nav>
</div>
<div class="container">

<div class="row">
    <div class="col-md-6 logo">
        <img src="2.png" width="250px" height="250px" alt="">
        <h2>Perpustakaan Universitas Nusa Putra </h2>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h2>Register</h2>
                <form action="" method="post">
                    Nama Lengkap<br>
                    <input type="text" name="nama" size="58" required/></br>
                    Telepon<br>
                    <input type="text" name="telp" size="58" required/></br>
                    Email<br>
                    <input type="email" name="email" size="58" required/></br>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    Password<br>
                    <input type="password" name="pass" size="58" required/></br>
                    <p><a href="index.php">Kembali</a></p>
                    <input type="submit" name="daftar" value="Daftar"/></br>
                    
                  </form>
                  <?php
                      if(isset($_POST['daftar'])){
                        include 'koneklogin.php';
                        $insert = mysqli_query($conn, "INSERT INTO tb_user VALUES
                            (NULL,
                                '".$_POST['nama']."',
                                '".$_POST['telp']."',
                                '".$_POST['email']."',
                                '".$_POST['pass']."')");
                        if($insert){
                          header('location:index.php');
                        }else{
                          echo'gagal daftar';
                        }
                      }
                ?>
            </div>
        </div>
    </div>
    </div>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>