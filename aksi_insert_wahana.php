<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

$nama_wahana     = $_POST['nama_wahana'];
$deskripsi       = $_POST['deskripsi'];
$lokasi          = $_POST['lokasi'];
$jam_operasional = $_POST['jam_operasional'];
$kategori        = $_POST['kategori'];

$query = "INSERT INTO wahana (nama_wahana, deskripsi, lokasi, jam_operasional, kategori)
          VALUES ('$nama_wahana', '$deskripsi', '$lokasi', '$jam_operasional', '$kategori')";

$sql = mysqli_query($koneksi, $query) 
    or die("Gagal menyimpan data: " . mysqli_error($koneksi));

header("Location: index_wahana.php"); // Ganti dengan file tampilan data wahana
exit;
?>
