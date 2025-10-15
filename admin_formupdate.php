<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");

$id_admin = $_GET['id_admin'];
$query = "SELECT * FROM admin WHERE id_admin = $id_admin";
$data = mysqli_query($koneksi, $query);
$v = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Admin</title>
</head>
<body>
    <h3>Form Edit Admin</h3>
    <form action="aksi_update_admin.php" method="POST">
        <input type="hidden" name="id_admin" value="<?php echo $v['id_admin']; ?>">

        <label>Nama Admin:</label><br>
        <input type="text" name="nama_admin" value="<?php echo $v['nama_admin']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $v['email']; ?>" required><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
