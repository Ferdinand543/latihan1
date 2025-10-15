<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi");

// Validasi id_ulasan dari URL
if (!isset($_GET['id_ulasan']) || !is_numeric($_GET['id_ulasan'])) {
    die("ID ulasan tidak valid");
}
$id_ulasan = intval($_GET['id_ulasan']);

// Ambil data ulasan dari database
$query = "SELECT * FROM ulasan WHERE id_ulasan = $id_ulasan";
$data = mysqli_query($koneksi, $query) or die("Gagal query: " . mysqli_error($koneksi));

if (mysqli_num_rows($data) == 0) {
    die("Data ulasan tidak ditemukan");
}

$v = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Ulasan</title>
</head>
<body>
    <h3>Edit Data Ulasan</h3>
    <form action="aksi_update_ulasan.php" method="POST">
        <input type="hidden" name="id_ulasan" value="<?php echo htmlspecialchars($v['id_ulasan']); ?>">

        <label>ID Pengguna:</label><br>
        <input type="number" name="id_pengguna" value="<?php echo htmlspecialchars($v['id_pengguna']); ?>" required><br><br>

        <label>ID Paket:</label><br>
        <input type="number" name="id_paket" value="<?php echo htmlspecialchars($v['id_paket']); ?>" required><br><br>

        <label>Rating:</label><br>
        <input type="number" name="rating" value="<?php echo htmlspecialchars($v['rating']); ?>" min="1" max="5" required><br><br>

        <label>Komentar:</label><br>
        <textarea name="komentar" required><?php echo htmlspecialchars($v['komentar']); ?></textarea><br><br>

        <label>Tanggal Ulasan:</label><br>
        <input type="date" name="tanggal_ulasan" value="<?php echo htmlspecialchars($v['tanggal_ulasan']); ?>" required><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
