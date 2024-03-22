<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pelanggan</title>
</head>
<body>
    <header>
        <h3>Data Pelanggan</h3>
    </header>

    <nav>
        <a href="form-tambah-pelanggan.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border = "1">
        <thead>
            <tr>
                <th>Kode Pelanggan</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Tanggal lahir</th>
                <th>Jenis Pelanggan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pelanggan";
            $query = mysqli_query($db, $sql);

            while($pelanggan = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$pelanggan['id_pelanggan']."</td>";
                echo "<td>".$pelanggan['nama']."</td>";
                echo "<td>".$pelanggan['jenis_kelamin']."</td>";
                echo "<td>".$pelanggan['alamat']."</td>";
                echo "<td>".$pelanggan['telepon']."</td>";
                echo "<td>".$pelanggan['tgl_lahir']."</td>";
                echo "<td>".$pelanggan['jenis_pelanggan']."</td>";

                echo "<td>";
                echo "<a href='form-edit-pelanggan.php?
        id_pelanggan=".$pelanggan['id_pelanggan']."'>Edit</a>";
                echo "<span> </span>";
                echo "<a href='hapus-pelanggan.php?
        id_pelanggan=".$pelanggan['id_pelanggan']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total:<?php echo mysqli_num_rows($query)?></p>
</body>
</html>