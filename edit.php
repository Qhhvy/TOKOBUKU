<?php

require "config.php";
$id = $_GET["id"];

$query = "SELECT * FROM buku WHERE id=$id";
$edit = mysqli_query($connect, $query);
if (isset($_POST["ubah"])) {
    // Menangkap kiriman dari user
    $kode = $_POST["kode"];
    $buku = $_POST["kategori"];
    $buku = $_POST["nama_buku"];
    $buku = $_POST["harga"];
    $buku = $_POST["stok"];
    $buku = $_POST["penerbit_id"];
    // Lakukan query update
    $query = "UPDATE buku SET kode='$kode', nama_buku='$buku' WHERE id='$id'";
    // eksekusi query
    mysqli_query($connect, $query);
    header("location:index.php"); // redirect halaman
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><strong>Edit Data buku</strong></h1>
    <?php
    foreach ($edit as $dataedit) {
    ?>
    <form action="" method="post">
        <label for="">Kode</label><br>
        <input type="text" value="<?= $dataedit["kode"] ?>"><br><br>
        <label for="">Kategori</label><br>
        <input type="text" value="<?= $dataedit["kategori"] ?>"><br><br>
        <label for="">Nama Buku</label><br>
        <input type="text" value="<?= $dataedit["nama_buku"] ?>"><br><br>
        <label for="">Harga</label><br>
        <input type="text" value="<?= $dataedit["harga"] ?>"><br><br>
        <label for="">Stok</label><br>
        <input type="text" value="<?= $dataedit["stok"] ?>"><br><br>
        <label for="">Penerbit</label><br>
        <input type="text" value="<?= $dataedit["penerbit_id"] ?>"><br><br>
        <button type="submit" name="ubah">Update</button>
    </form>
    <?php
    }
    ?>
</body>
</html>