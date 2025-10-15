<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Pengguna</title>
</head>
<body>
    <h3>Tambah Data Pengguna</h3>
    <form action="aksi_insert_pengguna.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="text" name="password" required><br><br>

        <label>No Telepon:</label><br>
        <input type="text" name="no_telepon" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>Tanggal Daftar:</label><br>
        <input type="date" name="tanggal_daftar" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
