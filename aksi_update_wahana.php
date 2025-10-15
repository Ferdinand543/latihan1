<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

// Ambil data dari form
$id_wahana        = $_POST['id_wahana'];
$nama_wahana      = $_POST['nama_wahana'];
$deskripsi        = $_POST['deskripsi'];
$lokasi           = $_POST['lokasi'];
$jam_operasional  = $_POST['jam_operasional'];
$kategori         = $_POST['kategori'];

// Query update
$query = "UPDATE wahana SET 
            nama_wahana = '$nama_wahana',
            deskripsi = '$deskripsi',
            lokasi = '$lokasi',
            harga_tiket = '$harga_tiket',
            jam_operasional = '$jam_operasional',
            kategori = '$kategori'
          WHERE id_wahana = '$id_wahana'";

// Eksekusi query
$sql = mysqli_query($koneksi, $query) or die("Gagal ubah: " . mysqli_error($koneksi));

// Redirect ke halaman utama
header("Location: index_wahana.php");
exit;
?>
