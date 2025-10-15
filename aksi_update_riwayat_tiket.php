<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

$id_tiket          = $_POST['id_tiket'] ?? '';
$id_pengguna       = $_POST['id_pengguna'] ?? '';
$id_paket         = $_POST['id_paket'] ?? '';
$tanggal_pembelian = $_POST['tanggal_pembelian'] ?? '';
$tanggal_kunjungan = $_POST['tanggal_kunjungan'] ?? '';
$jam_kedatangan    = $_POST['jam_kedatangan'] ?? '';
$jumlah_tiket      = $_POST['jumlah_tiket'] ?? '';
$total_harga       = $_POST['total_harga'] ?? '';
$status_pembayaran = $_POST['status_pembayaran'] ?? '';

if (empty($id_tiket)) {
    die("ID tiket kosong, data tidak bisa diupdate.");
}

$query = "UPDATE riwayat_tiket SET 
            id_pengguna       = '$id_pengguna',
            id_paket         = '$id_paket',
            tanggal_pembelian = '$tanggal_pembelian',
            tanggal_kunjungan = '$tanggal_kunjungan',
            jam_kedatangan    = '$jam_kedatangan',
            jumlah_tiket      = '$jumlah_tiket',
            total_harga       = '$total_harga',
            status_pembayaran = '$status_pembayaran'
          WHERE id_tiket = '$id_tiket'";

$sql = mysqli_query($koneksi, $query) or die("Gagal ubah: " . mysqli_error($koneksi));

header("Location: index_riwayat_tiket.php");
exit();
?>
