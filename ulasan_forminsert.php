<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");

// Ambil data pengguna dan wahana untuk dropdown
$pengguna = mysqli_query($koneksi, "SELECT id_pengguna, nama FROM pengguna");
$paket_tiket   = mysqli_query($koneksi, "SELECT id_paket, nama_paket FROM paket_tiket");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Ulasan</title>
</head>
<body>
    <h3>Tambah Data Ulasan</h3>
    <form action="aksi_insert_ulasan.php" method="POST">

        <label>Pengguna:</label><br>
        <select name="id_pengguna" required>
            <option value="">-- Pilih Pengguna --</option>
            <?php while($p = mysqli_fetch_assoc($pengguna)): ?>
                <option value="<?= $p['id_pengguna'] ?>"><?= $p['nama'] ?></option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Paket:</label><br>
        <select name="id_paket" required>
            <option value="">-- Pilih Tiket --</option>
            <?php while($w = mysqli_fetch_assoc($paket_tiket)): ?>
                <option value="<?= $w['id_paket'] ?>"><?= $w['id_paket'] ?></option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Rating (1 - 5):</label><br>
        <input type="number" name="rating" min="1" max="5" required><br><br>

        <label>Komentar:</label><br>
        <textarea name="komentar" required></textarea><br><br>

        <label>Tanggal Ulasan:</label><br>
        <input type="date" name="tanggal_ulasan" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
