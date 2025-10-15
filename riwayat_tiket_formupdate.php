<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$id_tiket = $_GET['id_tiket'];
$query = "SELECT * FROM riwayat_tiket WHERE id_tiket = $id_tiket";
$data = mysqli_query($koneksi, $query);
$v = mysqli_fetch_assoc($data);
?>

<html>
<head>
    <title>Edit Data Tiket</title>
</head>
<body>
    <h3>Edit Data Tiket</h3>
    <form action="aksi_update_riwayat_tiket.php" method="POST">
        <input type="hidden" name="id_tiket" value="<?php echo $v['id_tiket']; ?>">
        
        <label>id_pengguna:</label><br>
        <input type="number" name="id_pengguna" value="<?php echo $v['id_pengguna']; ?>" required><br><br>
        
        <label>id_paket:</label><br>
        <input type="number" name="id_paket" value="<?php echo $v['id_paket']; ?>" required><br><br>
        
        <label>tanggal_pembelian:</label><br>
        <input type="date" name="tanggal_pembelian" value="<?php echo $v['tanggal_pembelian']; ?>" required><br><br>
        
        <label>tanggal_kunjungan:</label><br>
        <input type="date" name="tanggal_kunjungan" value="<?php echo $v['tanggal_kunjungan']; ?>" required><br><br>
        
        <label>jam_kedatangan:</label><br>
        <input type="time" name="jam_kedatangan" value="<?php echo $v['jam_kedatangan']; ?>" required><br><br>
        
        <label>jumlah_tiket:</label><br>
        <input type="number" name="jumlah_tiket" value="<?php echo $v['jumlah_tiket']; ?>" min="1" required><br><br>
        
        <label>total_harga:</label><br>
        <input type="number" name="total_harga" value="<?php echo $v['total_harga']; ?>" step="0.01" required><br><br>
        
        <label>status_pembayaran:</label><br>
        <input type="text" name="status_pembayaran" value="<?php echo $v['status_pembayaran']; ?>" required><br><br>
        
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="riwayat_tiket_index.php">Kembali ke Data Tiket</a>
</body>
</html>
