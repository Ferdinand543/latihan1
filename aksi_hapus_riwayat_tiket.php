<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$id_tiket = $_GET['id_tiket'];

$query = "DELETE FROM riwayat_tiket WHERE id_tiket='$id_tiket'";

if(mysqli_query($koneksi, $query)){
    header("Location: index_riwayat_tiket.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
