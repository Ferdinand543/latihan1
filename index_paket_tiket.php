<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") 
    or die("Gagal koneksi database");
?>

<html>
<head>
    <title>Data Paket Tiket</title>
    <link rel="stylesheet" href="stylestabel.css">
</head>
<body> 
    <h3>Data Paket Tiket</h3>
    <table border="3">
        <tr>
            <th>id_paket</th>
            <th>nama_paket</th>
            <th>harga_paket</th>
            <th>keterangan</th>
        </tr>
        <?php
        $squery = "SELECT * FROM paket_tiket";
        $data = mysqli_query($koneksi, $squery) or die("Gagal query: " . mysqli_error($koneksi));
        while($v = mysqli_fetch_array($data)): ?>
        <tr>
            <td><?php echo $v["id_paket"]; ?></td>
            <td><?php echo $v["nama_paket"]; ?></td>
            <td><?php echo $v["harga_paket"]; ?></td>
            <td>
                <a href="aksi_hapus_paket_tiket.php?id_paket=<?php echo $v['id_paket']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a> | 
                <a href="paket_tiket_formupdate.php?id_paket=<?php echo $v['id_paket']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="paket_tiket_forminsert.php">Tambah Data Paket</a>
</body>
</html>
