<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$email = $_POST['email'];

$query = "UPDATE admin SET nama_admin = '$nama_admin', email = '$email' WHERE id_admin = $id_admin";
mysqli_query($koneksi, $query) or die("Gagal update data");

header("Location: index_admin.php");
?>
