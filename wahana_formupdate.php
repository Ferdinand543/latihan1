<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi");

// Validasi id_wahana dari URL
if (!isset($_GET['id_wahana']) || !is_numeric($_GET['id_wahana'])) {
    die("ID wahana tidak valid");
}
$id_wahana = intval($_GET['id_wahana']);

// Ambil data wahana dari database
$query = "SELECT * FROM wahana WHERE id_wahana = $id_wahana";
$data = mysqli_query($koneksi, $query) or die("Gagal query: " . mysqli_error($koneksi));

if (mysqli_num_rows($data) == 0) {
    die("Data wahana tidak ditemukan");
}

$v = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Wahana</title>
</head>
<body>
    <h3>Edit Data Wahana</h3>
    <form action="aksi_update_wahana.php" method="POST">
        <input type="hidden" name="id_wahana" value="<?php echo htmlspecialchars($v['id_wahana']); ?>">

        <label>Nama Wahana:</label><br>
        <input type="text" name="nama_wahana" value="<?php echo htmlspecialchars($v['nama_wahana']); ?>" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required><?php echo htmlspecialchars($v['deskripsi']); ?></textarea><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi" value="<?php echo htmlspecialchars($v['lokasi']); ?>" required><br><br>

        <label>Jam Operasional:</label><br>
        <input type="text" name="jam_operasional" value="<?php echo htmlspecialchars($v['jam_operasional']); ?>" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" value="<?php echo htmlspecialchars($v['kategori']); ?>" required><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
