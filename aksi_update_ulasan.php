<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

// Ambil data dari form
$id_ulasan        = $_POST['id_ulasan'];
$id_pengguna      = $_POST['id_pengguna'];
$id_paket         = $_POST['id_paket'];
$rating           = $_POST['rating'];
$komentar         = $_POST['komentar'];
$tanggal_ulasan   = $_POST['tanggal_ulasan'];

// Query update
$query = "UPDATE ulasan SET 
            id_pengguna = '$id_pengguna',
            id_paket = '$id_paket',
            rating = '$rating',
            komentar = '$komentar',
            tanggal_ulasan = '$tanggal_ulasan'
          WHERE id_ulasan = '$id_ulasan'";

// Eksekusi query
$sql = mysqli_query($koneksi, $query) or die("Gagal update data ulasan: " . mysqli_error($koneksi));

// Redirect ke halaman utama ulasan
header("Location: index_ulasan.php");
exit;
?>
