<?php 
$host       = "localhost";
$user       = "kahfi";
$pass       = "12345";
$db         = "data";

$connect    = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$connect) {
    die("Tidak bisa terkoneksi ke database");
}