<html>
<head>
    <title>Tambah Data Paket Tiket</title>
</head>
<body>
    <h3>Tambah Data Paket Tiket</h3>
    <form action="aksi_insert_paket_tiket.php" method="POST">
        <!-- id_paket AUTO_INCREMENT, jadi tidak perlu input manual -->
        
        <label>Nama Paket:</label><br>
        <input type="text" name="nama_paket" required><br><br>

        <label>Harga Paket:</label><br>
        <input type="number" name="harga_paket" step="0.01" required><br><br>

        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href="index_paket_tiket.php">Kembali ke Data Paket Tiket</a>
</body>
</html>
