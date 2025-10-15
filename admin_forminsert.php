<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Admin</title>
</head>
<body>
    <h3>Form Tambah Admin</h3>
    <form action="aksi_insert_admin.php" method="POST">
        <label>Nama Admin:</label><br>
        <input type="text" name="nama_admin" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
