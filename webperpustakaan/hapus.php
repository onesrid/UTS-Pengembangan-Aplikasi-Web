<?php

    include("koneksi.php"); //memanggil koneksi.php

    //melakukan query delete from dengan patokan npm(where npm)
    $hapus = mysqli_query($conn,"DELETE from mhs WHERE npm ='$_GET[npm]'");

    //menampilkan alert apabila proses berhasil dilakukan
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = 'pinjam.php';
            </script>";
?>