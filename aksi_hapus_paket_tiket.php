<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

$id_paket = (int)$_GET['id_paket'];

$query = "DELETE FROM paket_tiket WHERE id_paket = $id_paket";

if (mysqli_query($koneksi, $query)) {
    header("Location: index_paket_tiket.php");
    exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
