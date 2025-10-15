<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");
?>

<html>
<head>
    <link rel="stylesheet" href="stylestabel.css">
    <title>Data Ulasan</title>
</head>
<body>
    <h3>Data Ulasan</h3>
    <table border="3">
        <tr>
            <th>id_ulasan</th>
            <th>id_pengguna</th>
            <th>id_paket</th>
            <th>rating</th>
            <th>komentar</th>
            <th>tanggal_ulasan</th>
            <th>keterangan</th>
        </tr>
        <?php
        $squery = "SELECT * FROM ulasan";
        $data = mysqli_query($koneksi, $squery) or die("Gagal query: " . mysqli_error($koneksi));
        while ($v = mysqli_fetch_array($data)):
        ?>
        <tr>
            <td><?php echo $v["id_ulasan"]; ?></td>
            <td><?php echo $v["id_pengguna"]; ?></td>
            <td><?php echo $v["id_paket"]; ?></td>
            <td><?php echo $v["rating"]; ?></td>
            <td><?php echo $v["komentar"]; ?></td>
            <td><?php echo $v["tanggal_ulasan"]; ?></td>
            <td>
                <a href="aksi_hapus_ulasan.php?id_ulasan=<?php echo $v['id_ulasan']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                <a href="ulasan_formupdate.php?id_ulasan=<?php echo $v['id_ulasan']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="ulasan_forminsert.php">Tambah Data Ulasan</a>
</body>
</html>
