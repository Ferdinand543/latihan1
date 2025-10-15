<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

if (isset($_GET['id_pengguna'])) {
    $id_pengguna = $_GET['id_pengguna'];

    $query = "DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        header("Location: index_pengguna.php"); // ganti sesuai nama file utama
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID pengguna tidak ditemukan.";
}
?>
