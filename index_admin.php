<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("gagal koneksi database");
echo "";
?>

<html>
<link rel="stylesheet" href="stylestabel.css">
<body> 
    </form>
    <table border="3">
        <br>
        <h3>Data Admin</h3>
        <tr>
            <th>id_admin</th>
            <th>nama_admin</th>
            <th>email</th>
            <th>keterangan</th>
        </tr>
        <?php
        $squery = "SELECT * FROM admin";
        $data = mysqli_query($koneksi, $squery) or die("gagal query :" . $squery);
        ?>
        <?php while ($v = mysqli_fetch_array($data)): ?>
        <tr>
            <td><?php echo $v["id_admin"]; ?></td>
            <td><?php echo $v["nama_admin"]; ?></td>
            <td><?php echo $v["email"]; ?></td>
            <td>
                <a href="aksi_hapus_admin.php?id_admin=<?php echo $v['id_admin']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                <a href="admin_formupdate.php?id_admin=<?php echo $v['id_admin']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="admin_forminsert.php">Tambah Data Admin</a>
</body>
</html>


