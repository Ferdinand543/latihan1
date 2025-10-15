<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

// Ambil data dari form POST
$id_pengguna = $_POST['id_pengguna'] ?? '';
$id_paket = $_POST['id_paket'] ?? '';
$tanggal_pembelian = $_POST['tanggal_pembelian'] ?? '';
$tanggal_kunjungan = $_POST['tanggal_kunjungan'] ?? '';
$jam_kedatangan = $_POST['jam_kedatangan'] ?? '';
$jumlah_tiket = $_POST['jumlah_tiket'] ?? '';
$total_harga = $_POST['total_harga'] ?? '';
$status_pembayaran = $_POST['status_pembayaran'] ?? '';

// Validasi sederhana
if (!$id_pengguna || !$id_paket || !$tanggal_pembelian || !$tanggal_kunjungan || !$jam_kedatangan || !$jumlah_tiket || !$total_harga || !$status_pembayaran) {
    die("Data tidak lengkap, semua field harus diisi.");
}

// Escape data untuk keamanan (opsional tapi disarankan)
$id_pengguna = mysqli_real_escape_string($koneksi, $id_pengguna);
$id_paket = mysqli_real_escape_string($koneksi, $id_paket);
$tanggal_pembelian = mysqli_real_escape_string($koneksi, $tanggal_pembelian);
$tanggal_kunjungan = mysqli_real_escape_string($koneksi, $tanggal_kunjungan);
$jam_kedatangan = mysqli_real_escape_string($koneksi, $jam_kedatangan);
$jumlah_tiket = mysqli_real_escape_string($koneksi, $jumlah_tiket);
$total_harga = mysqli_real_escape_string($koneksi, $total_harga);
$status_pembayaran = mysqli_real_escape_string($koneksi, $status_pembayaran);

// Query insert
$query = "INSERT INTO riwayat_tiket 
    (id_pengguna, id_paket, tanggal_pembelian, tanggal_kunjungan, jam_kedatangan, jumlah_tiket, total_harga, status_pembayaran)
    VALUES 
    ('$id_pengguna', '$id_paket', '$tanggal_pembelian', '$tanggal_kunjungan', '$jam_kedatangan', '$jumlah_tiket', '$total_harga', '$status_pembayaran')";

if (mysqli_query($koneksi, $query)) {
    // Redirect ke halaman daftar riwayat tiket kalau sukses
    header("Location: index_riwayat_tiket.php");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
