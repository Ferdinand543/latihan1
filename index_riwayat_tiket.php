<?php
$koneksi = mysqli_connect("localhost", "root", "", "tiket_wahana_online") or die("Gagal koneksi database");
?>

<html>
<head>
    <title>Data Riwayat Tiket</title>
    <link rel="stylesheet" href="stylestabel.css">
</head>
<body> 
    <h3>Data Riwayat Tiket</h3>
    <table border="3">
        <tr>
            <th>id_tiket</th>
            <th>id_pengguna</th>
            <th>id_paket</th>
            <th>tanggal_pembelian</th>
            <th>tanggal_kunjungan</th>
            <th>jam_kedatangan</th>
            <th>jumlah_tiket</th>
            <th>total_harga</th>
            <th>status_pembayaran</th>
            <th>keterangan</th>
        </tr>
        <?php
        $squery = "SELECT * FROM riwayat_tiket";
        $data = mysqli_query($koneksi, $squery) or die("Gagal query: " . $squery);
        while($v = mysqli_fetch_array($data)): ?>
        <tr>
            <td><?php echo $v["id_tiket"]; ?></td>
            <td><?php echo $v["id_pengguna"]; ?></td>
            <td><?php echo $v["id_paket"]; ?></td>
            <td><?php echo $v["tanggal_pembelian"]; ?></td>
            <td><?php echo $v["tanggal_kunjungan"]; ?></td>
            <td><?php echo $v["jam_kedatangan"]; ?></td>
            <td><?php echo $v["jumlah_tiket"]; ?></td>
            <td><?php echo $v["total_harga"]; ?></td>
            <td><?php echo $v["status_pembayaran"]; ?></td>
            <td>
                <a href="aksi_hapus_riwayat_tiket.php?id_tiket=<?php echo $v['id_tiket']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a> | 
                <a href="riwayat_tiket_formupdate.php?id_tiket=<?php echo $v['id_tiket']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="riwayat_tiket_forminsert.php">Tambah Data Tiket</a>
</body>
</html>
