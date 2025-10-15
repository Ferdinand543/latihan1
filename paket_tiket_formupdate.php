<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$id_paket = (int)$_GET['id_paket']; // ambil dan casting id_paket dari URL

$query = "SELECT * FROM paket_tiket WHERE id_paket = $id_paket";
$data = mysqli_query($koneksi, $query);

if (!$data) {
    die("Query error: " . mysqli_error($koneksi));
}

$v = mysqli_fetch_assoc($data);

if (!$v) {
    die("Data paket tiket tidak ditemukan!");
}
?>

<html>
<head>
    <title>Update Data Paket Tiket</title>
</head>
<body>
    <h3>Update Data Paket Tiket</h3>
    <form action="aksi_update_paket_tiket.php" method="POST">
        <input type="hidden" name="id_paket" value="<?= htmlspecialchars($v['id_paket']) ?>">

        <label>Nama Paket:</label><br>
        <input type="text" name="nama_paket" value="<?= htmlspecialchars($v['nama_paket']) ?>" required><br><br>

        <label>Harga Paket:</label><br>
        <input type="number" name="harga_paket" value="<?= htmlspecialchars($v['harga_paket']) ?>" step="0.01" required><br><br>

        <input type="submit" value="Update">
    </form>
    <br>
    <a href="paket_tiket_index.php">Kembali ke Data Paket</a>
</body>
</html>
