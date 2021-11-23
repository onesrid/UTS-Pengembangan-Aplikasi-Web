<?php
    //memanggil koneksi.php untuk melakukan koneksi dengan database
    require "koneksi.php";
    $npm =$_POST["npm"];
    $nama =$_POST["nama"];
    $kelas =$_POST["kelas"];
    $semester =$_POST["semester"];
    $kode_buku =$_POST["kode_buku"];
    $no_tlp =$_POST["no_tlp"];
    $tanggal_peminjaman =$_POST["tanggal_peminjaman"];
    $tanggal_pengembalian =$_POST["tanggal_pengembalian"];

    //melakukan query update dengan patokan npm (where npm)
    $query = mysqli_query($conn,"UPDATE mhs SET
            nama ='$nama',
            kelas ='$kelas',
            semester ='$semester',
            kode_buku ='$kode_buku',
            no_tlp ='$no_tlp',
            tanggal_peminjaman ='$tanggal_peminjaman',
            tanggal_pengembalian ='$tanggal_pengembalian'
        WHERE npm ='$npm'");

//memunculkan alert jika proses tersebut berhasil
echo "<script>
        alert('Data Berhasil Diubah!');
        document.location.href='pinjam.php';
    </script>";
?>