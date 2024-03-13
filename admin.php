<?php 
require "config.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toko Buku</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9e3b5dfe4e.js" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid">
        <navbar>
            <nav class="nav nav-pills flex-column flex-sm-row mt-4">
                <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="index.php">Home</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="admin.php">Admin</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="pengadaan.php">Pengadaan</a>
            </nav>
        </navbar>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                    <h5 class="fw-bold">Main Menu</h5>
                    <ul>
                        <a href="index.php">
                            <li>Dashboard</li>
                        </a>
                        <a href="admin.php">
                            <li>Manage Data</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-9">
                    <a class="btn btn-primary float-end mb-4" href="tambah.php"><i class="fa-solid fa-circle-plus"></i>  Tambah data</a>
                    <p class="fw-bold h4">Data Buku</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">kode</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col" style="width:15%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "SELECT * FROM buku";
                            $q2     = mysqli_query($connect, $sql2);
                            $no   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id'];
                                $kode = $r2['kode'];
                                $kategori = $r2['kategori'];
                                $nama_buku = $r2['nama_buku'];
                                $harga = $r2['harga'];
                                $stok = $r2['stok'];
                                $penerbit_id = $r2['penerbit_id'];

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td scope="row"><?php echo $kode ?></td>
                                    <td scope="row"><?php echo $kategori ?></td>
                                    <td scope="row"><?php echo $nama_buku ?></td>
                                    <td scope="row"><?php echo $harga ?></td>
                                    <td scope="row"><?php echo $stok ?></td>
                                    <td scope="row">
                                        <?php
                                        if ($penerbit_id == 1) {
                                            echo "Penerbit Informatika";
                                        } elseif ($penerbit_id == 2) {
                                            echo "Andi Offset";
                                        } else {
                                            echo "Danendra";
                                        }
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <a href="edit.php?id=<?= $id ?>"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button></a>
                                        <a href="delete.php?id=<?= $id ?>" onclick="return confirm('Yakin ingin menghapus data?')"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>            
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                    <hr class="mt-5 mb-5">
                    <a class="btn btn-primary float-end mb-4" href="tambah.php"><i class="fa-solid fa-circle-plus"></i>  Tambah data</a>
                    <p class="fw-bold h4">Data Penerbit</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Telepon</th>                            
                                <th scope="col" style="width:15%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "SELECT * FROM penerbit";
                            $q2     = mysqli_query($connect, $sql2);
                            $no   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id'];
                                $kode = $r2['kode'];
                                $nama = $r2['nama'];
                                $alamat = $r2['alamat'];
                                $kota = $r2['kota'];
                                $telepon = $r2['telepon'];

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td scope="row"><?php echo $kode ?></td>
                                    <td scope="row"><?php echo $nama ?></td>
                                    <td scope="row"><?php echo $alamat ?></td>
                                    <td scope="row"><?php echo $kota ?></td>
                                    <td scope="row"><?php echo $telepon ?></td>
                                    <td scope="row">
                                        <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button></a>
                                        <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>            
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>