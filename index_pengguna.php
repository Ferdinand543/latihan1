<?php
$koneksi=mysqli_connect("localhost","root","","tiket_wahana_online") or die("gagal koneksi database");
echo "";
?>

<html>
<link rel="stylesheet" href="stylestabel.css">
<body> 
    </form>
    <table border="3">
        <br>
        <h3>Data Pengguna</h3>
        <tr>
            <th>id_pengguna</th>
            <th>nama</th>
            <th>email</th>
            <th>password</th>
            <th>no_telepon</th>
            <th>alamat</th>
            <th>tanggal_daftar</th>
            <th>keterangan</th>
        </tr>
        <?php
        $squery="select * from pengguna";
        $data = mysqli_query($koneksi,$squery) or die("gagal query :".$squery);
        ?>
        <?php while($v=mysqli_fetch_array($data)):;?>
        <tr>
            <td><?php echo $v["id_pengguna"];?></td>
            <td><?php echo $v["nama"];?></td>
            <td><?php echo $v["email"];?></td>
            <td><?php echo $v["password"];?></td>
            <td><?php echo $v["no_telepon"];?></td>
            <td><?php echo $v["alamat"];?></td>
            <td><?php echo $v["tanggal_daftar"];?></td>
            <td><a href="aksi_hapus_pengguna.php?id_pengguna=<?php echo $v['id_pengguna']; ?>"onclick="return confirm('Hapus data ini?')">Hapus</a>
            <a href="pengguna_formupdate.php?id_pengguna=<?php echo $v['id_pengguna']; ?>">Edit</a></td>
        </tr>
        <?php endwhile;?>
    </table>
    <a href="pengguna_forminsert.php">Tambah Data Pengguna</a>
</body>
</html>