<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

// Ambil data dari form
$id_pengguna     = $_POST['id_pengguna'];
$id_paket        = $_POST['id_paket'];
$rating          = $_POST['rating'];
$komentar        = $_POST['komentar'];
$tanggal_ulasan  = $_POST['tanggal_ulasan'];

// Query insert
$query = "INSERT INTO ulasan (id_pengguna, id_paket, rating, komentar, tanggal_ulasan)
          VALUES ('$id_pengguna', '$id_paket', '$rating', '$komentar', '$tanggal_ulasan')";

// Eksekusi query
$sql = mysqli_query($koneksi, $query) 
    or die("Gagal menyimpan data: " . mysqli_error($koneksi));

// Redirect setelah berhasil simpan
header("Location: index_ulasan.php"); // Ganti sesuai nama file tampilan data ulasan
exit;
?>
