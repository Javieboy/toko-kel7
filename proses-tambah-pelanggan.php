<?php
include ("config.php");

//cek apakah tombol tambah sudah diklik belum 
if(isset($_POST['tambah'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $alamat = $_POST['alamat'];
    $handphone = $_POST['handphone'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_pelanggan = $_POST['jenis_pelanggan'];

    // buat query untuk mengambil ID pelanggan terbaru
    $query = mysqli_query($db, "SELECT MAX(id_pelanggan) AS max_id FROM pelanggan"); 
    $data = mysqli_fetch_assoc($query);
    $max_id = $data['max_id'];
    
    // menghasilkan ID pelanggan baru
    $next_id = (int) substr($max_id, 1) + 1;
    $new_id = 'P' . sprintf('%03d', $next_id);
    
    //buat query
    $sql = "INSERT INTO pelanggan (id_pelanggan, nama, jenis kelamin, alamat, handphone, tgl_lahir, jenis_pelanggan) 
    VALUE ('$new_id', '$nama', '$jenis_kelamin', '$alamat', '$handphone', '$tgl_lahir', '$jenis_pelanggan')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if($query) {
        //kalau berhasil alihkan ke halaman list-pelanggan.php header('Location: list-pelanggan.php');
        header('Loaction: list-pelanggan.php');
    }else{
        //kalau gagal tapmpilkan pesan
        die("Gagal menyimpan perubahan...".mysqli_error($db));
    }

    }else{
        die("Akses dilarang ...");
    }
?>

