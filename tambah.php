<?php

require "config.php";
$buku = mysqli_query($connect, "SELECT * FROM buku"); // (variabel koneksi, query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9e3b5dfe4e.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <a href="admin.php" class="btn btn-warning float-end" style="margin-right: 36rem;"><i class="fa-solid fa-circle-left"></i>  Back</a>
        <h3 class="mt-5 fw-bold">Tambah Data buku</h3>
        <div class="row mt-5">
            <div class="col-md-6">
                <form class="card px-3 py-3" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama buku</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stok</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="penerbit_id" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>  Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php
    // Mengambil kiriman data dari user/klien
    $kode = $_POST["kode"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit_id = $_POST["penerbit_id"];
    $query = "INSERT INTO buku(id, kode, kategori, nama_buku, harga, stok, penerbit_id) VALUES ('', '$kode', '$kategori', '$nama_buku', $harga, $stok, $penerbit_id)";
    if (isset($_POST["simpan"])) {
        mysqli_query($connect, $query);
        header("location:index.php");
    }
    ?>
  </body>
</html>