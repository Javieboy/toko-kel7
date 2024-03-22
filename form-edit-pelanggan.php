<?php
include("config.php");

// kalau tidak ada id_pelanggan di query string 
if(!isset($_GET['id_pelanggan'])){
    header('Location: list-pelanggan.php');
}

    // ambil id dari query string
    $id_pelanggan = $_GET['id_pelanggan'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM pelanggan WHERE id_pelanggan '$id_pelanggan'"; $query = mysqli_query($db, $sql);
    $pelanggan = mysqli_fetch_assoc($query);

    // jika data yang diedit tidak ditemukan 
    if(mysqli_num_rows($query)<1){
        die("data tidak ditemukan".mysqli_error($db));
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Pelanggan</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Pelanggan</h3>
    </header>
    <form action="proses-edit-pelanggan.php" method="POST">
    
        <fieldset>
            <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan['id_pelanggan'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pelanggan [ 'nama'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label> <?php $jk = $pelanggan['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="L" <?php echo ($jk == 'L')?"checked":""?>>Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="p" <?php echo ($jk == 'P')?"checked":""?>>Perempuan</label>
        </p> 
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat "><?php echo $pelanggan [ 'alamat'] ?></textarea>
        </p> 
        <p>
            <label for="handphone">No. HP: </label>
            <input type="text" name="handphone" placeholder="Nomor Handphone" value="<?php echo $pelanggan [ 'handphone'] ?>" />
        </p> 
        <p>
            <label for="tgl_lahir">Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir" value="<?php echo $pelanggan['tgl_lahir'] ?>"/>
        </p>
        <p>
            <label for="jenis_pelanggan">Jenis Pelanggan :</label>
            <?php $jp = $pelanggan['jenis_pelanggan']; ?>
            <select name="jenis_pelanggan">
                <option value="G" <?php echo ($jp == 'G')?"selected":""?>>Gold</option> <option value="S" <?php echo ($jp == 'S')?"selected":""?>>Silver</option> </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
</body>
</html>