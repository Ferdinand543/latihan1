<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

$nama_paket = mysqli_real_escape_string($koneksi, $_POST['nama_paket']);
$harga_paket = floatval($_POST['harga_paket']);  // pastikan angka

$query = "INSERT INTO paket_tiket (nama_paket, harga_paket) 
          VALUES ('$nama_paket', $harga_paket)";

mysqli_query($koneksi, $query) or die("Gagal insert data: " . mysqli_error($koneksi));

header("Location: index_paket_tiket.php");
exit();
?>
