<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

if (isset($_GET['id_ulasan'])) {
    $id_ulasan = $_GET['id_ulasan'];

    $query = "DELETE FROM ulasan WHERE id_ulasan = '$id_ulasan'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        header("Location: index_ulasan.php"); // Ganti dengan file utama tampilan ulasan
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID ulasan tidak ditemukan.";
}
?>
