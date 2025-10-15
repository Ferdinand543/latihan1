<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Wahana</title>
</head>
<body>
    <h3>Tambah Data Wahana</h3>
    <form action="aksi_insert_wahana.php" method="POST">
        <label>Nama Wahana:</label><br>
        <input type="text" name="nama_wahana" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required></textarea><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi" required><br><br>

        <label>Jam Operasional:</label><br>
        <input type="text" name="jam_operasional" placeholder="Contoh: 08:00 - 17:00" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
