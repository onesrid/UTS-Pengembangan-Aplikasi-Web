
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

    //melakukan query insert into
    //bagian  ini yang berperan memasukan data yang diinput kedalam database
    $query = mysqli_query($conn,"INSERT INTO mhs VALUES 
    ('$npm','$nama','$kelas','$semester','$kode_buku','$no_tlp','$tanggal_peminjaman','$tanggal_pengembalian')");

    //menampilkan alert untuk menandakan bahwa data sudah berhasil  ditambahkan
    if (isset($query)) {
        echo "<script>
                alert('Data berhasil Ditambahkan!');
                document.location.href='pinjam.php';
            </script>";
    }
?>