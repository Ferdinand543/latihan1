<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

if (isset($_GET['id_wahana'])) {
    $id_wahana = $_GET['id_wahana'];

    $query = "DELETE FROM wahana WHERE id_wahana = '$id_wahana'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        header("Location: index_wahana.php"); // Ganti sesuai nama file utama tampilan data wahana
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID wahana tidak ditemukan.";
}
?>
