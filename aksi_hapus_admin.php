<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$id_admin = $_GET['id_admin'];

$query = "DELETE FROM admin WHERE id_admin = $id_admin";
mysqli_query($koneksi, $query) or die("Gagal hapus data");

header("Location: index_admin.php");
?>
