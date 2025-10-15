<html>
<head>
    <title>Tambah Data Tiket</title>
</head>
<body>
    <h3>Tambah Data Tiket</h3>
    <form action="aksi_insert_riwayat_tiket.php" method="POST">
        <label>id_pengguna:</label><br>
        <input type="number" name="id_pengguna" required><br><br>
        
        <label>id_paket:</label><br>
        <input type="number" name="id_paket" required><br><br>
        
        <label>tanggal_pembelian:</label><br>
        <input type="date" name="tanggal_pembelian" required><br><br>
        
        <label>tanggal_kunjungan:</label><br>
        <input type="date" name="tanggal_kunjungan" required><br><br>
        
        <label>jam_kedatangan:</label><br>
        <input type="time" name="jam_kedatangan" required><br><br>
        
        <label>jumlah_tiket:</label><br>
        <input type="number" name="jumlah_tiket" min="1" required><br><br>
        
        <label>total_harga:</label><br>
        <input type="number" name="total_harga" step="0.01" required><br><br>
        
        <label>status_pembayaran:</label><br>
        <input type="text" name="status_pembayaran" required><br><br>
        
        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href="index_tiket_riwayat.php">Kembali ke Data Tiket</a>
</body>
</html>
