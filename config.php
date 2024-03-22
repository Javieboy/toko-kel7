<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "toko";

$db = mysqli_connect($server, $user, $password, $toko);

if(!$db){
    die("Gagal terhubung dengan database:".mysqli_connect_error());
}

?>