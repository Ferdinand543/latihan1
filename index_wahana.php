<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");
?>

<html>
<head>
    <link rel="stylesheet" href="stylestabel.css">
    <title>Data Wahana</title>
</head>
<body>
    <h3>Data Wahana</h3>
    <table border="3">
        <tr>
            <th>id_wahana</th>
            <th>nama_wahana</th>
            <th>deskripsi</th>
            <th>lokasi</th>
            <th>jam_operasional</th>
            <th>kategori</th>
            <th>keterangan</th>
        </tr>
        <?php
        $squery = "SELECT * FROM wahana";
        $data = mysqli_query($koneksi, $squery) or die("Gagal query: " . mysqli_error($koneksi));
        while ($v = mysqli_fetch_array($data)):
        ?>
        <tr>
            <td><?php echo $v["id_wahana"]; ?></td>
            <td><?php echo $v["nama_wahana"]; ?></td>
            <td><?php echo $v["deskripsi"]; ?></td>
            <td><?php echo $v["lokasi"]; ?></td>
            <td><?php echo $v["jam_operasional"]; ?></td>
            <td><?php echo $v["kategori"]; ?></td>
            <td>
                <a href="aksi_hapus_wahana.php?id_wahana=<?php echo $v['id_wahana']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                <a href="wahana_formupdate.php?id_wahana=<?php echo $v['id_wahana']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="wahana_forminsert.php">Tambah Data Wahana</a>
</body>
</html>
