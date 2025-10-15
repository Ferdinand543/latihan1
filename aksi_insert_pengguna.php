<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];
$tanggal_daftar = $_POST['tanggal_daftar'];

$query = "INSERT INTO pengguna (nama, email, password, no_telepon, alamat, tanggal_daftar)
          VALUES ('$nama', '$email', '$password', '$no_telepon', '$alamat', '$tanggal_daftar')";
$sql = mysqli_query($koneksi, $query) or die("Gagal menyimpan data: " . mysqli_error($koneksi));

header("Location: index_pengguna.php");
exit;
?>
