<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

$id_paket = (int)$_POST['id_paket'];
$nama_paket = mysqli_real_escape_string($koneksi, $_POST['nama_paket']);
$harga_paket = mysqli_real_escape_string($koneksi, $_POST['harga_paket']);

$query = "UPDATE paket_tiket SET 
            nama_paket = '$nama_paket', 
            harga_paket = $harga_paket
          WHERE id_paket = $id_paket";

if (mysqli_query($koneksi, $query)) {
    header("Location: index_paket_tiket.php");
    exit();
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
?>
