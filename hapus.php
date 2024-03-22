<?php
include("config.php");

if(isset($GET['id_pelanggan'])){

    //ambil id dari query string
    $id_pelanggan = $GET['id_pelanggan'];

    //buat query hapus
    $sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    $query = mysqli_query($db, $sql);

    //apakah query hapus berhasil
    if($query){
        header('Location: list-pelanggan.php');
    }else{
        die("Gagal menghapus...".mysqli_error($db));
    }}else{ 
        die("Akses dilarang...");
    }
?>