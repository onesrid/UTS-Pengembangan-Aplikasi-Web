<?php

$conn = mysqli_connect("localhost","root","","webperpustakaan");


if(isset($conn)){
    echo"data berhasil terkoneksi";


} else{
    echo"koneksi gagal";
}
?>