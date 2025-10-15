<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

$id_pengguna     = $_POST['id_pengguna'];
$nama            = $_POST['nama'];
$email           = $_POST['email'];
$password        = $_POST['password'];
$no_telepon      = $_POST['no_telepon'];
$alamat          = $_POST['alamat'];
$tanggal_daftar  = $_POST['tanggal_daftar'];

$query = "UPDATE pengguna SET 
            nama = '$nama', 
            email = '$email', 
            password = '$password', 
            no_telepon = '$no_telepon', 
            alamat = '$alamat', 
            tanggal_daftar = '$tanggal_daftar' 
          WHERE id_pengguna = '$id_pengguna'";

$sql = mysqli_query($koneksi, $query) or die("Gagal ubah: " . mysqli_error($koneksi));

header("Location: index_pengguna.php"); // ganti sesuai nama halaman utama kamu
?>
