<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi");

$id_pengguna = $_GET['id_pengguna'];
$query = "SELECT * FROM pengguna WHERE id_pengguna = $id_pengguna";
$data = mysqli_query($koneksi, $query);
$v = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Pengguna</title>
</head>
<body>
    <h3>Edit Data Pengguna</h3>
    <form action="aksi_update_pengguna.php" method="POST">
        <input type="hidden" name="id_pengguna" value="<?php echo $v['id_pengguna']; ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $v['nama']; ?>"><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $v['email']; ?>"><br><br>
        <label>Password:</label><br>
        <input type="text" name="password" value="<?php echo $v['password']; ?>"><br><br>
        <label>No Telepon:</label><br>
        <input type="text" name="no_telepon" value="<?php echo $v['no_telepon']; ?>"><br><br>
        <label>Alamat:</label><br>
        <textarea name="alamat"><?php echo $v['alamat']; ?></textarea><br><br>
        <label>Tanggal Daftar:</label><br>
        <input type="date" name="tanggal_daftar" value="<?php echo $v['tanggal_daftar']; ?>"><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>