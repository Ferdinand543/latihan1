<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$nama_admin = $_POST['nama_admin'];
$email = $_POST['email'];

$query = "INSERT INTO admin (nama_admin, email) VALUES ('$nama_admin', '$email')";
mysqli_query($koneksi, $query) or die("Gagal insert data");

header("Location: index_admin.php");
?>
