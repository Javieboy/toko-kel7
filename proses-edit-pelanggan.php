<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $handphone = $_POST['handphone'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_pelanggan = $_POST['jenis_pelanggan'];

    // buat query update
    $sql = "UPDATE pelanggan SET nama='$nama', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', jenis_pelanggan='$jenis_pelanggan', WHERE id_pelanggan='$id_pelanggan'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-pelanggan.php
        header('Location: list-pelanggan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan." . mysqli_error($db));
    }
} else {
    die("Akses dilarang!");
}
?>