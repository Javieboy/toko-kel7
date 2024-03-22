<!DOCTYPE html>
<html>
<head>
    <title>Formulir Penambahan data Pelanggan</title>
</head>
<body>
    <header>
        <h3>Formulir Tambah Data Pelanggan</h3>
    </header>
    <form action="proses-tambah-pelanggan.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama"/>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="L">Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="P">Perempuan</label> 
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="handphone">No. HP: </label>
                <input type="text" name="handphone" placeholder="No. HP"/>
            </p>
            <p>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir"/>
            </p>
            <p>
                <label for="jenis_pelanggan">Jenis Pelanggan: </label>
                <select name="jenis_pelanggan">
                    <option value="G">Gold</option>
                    <option value="S">Silver</option>
                </select>
            </p>
            <p>
                <input type="Submit" value="Tambah" name="tambah"/>
            </p>
        </fieldset>
    </form>
</body>
</html>