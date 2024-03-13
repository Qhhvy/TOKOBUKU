<?php 
require "config.php";

// Proses pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = '';
if (!empty($search)) {
    $where = "WHERE nama_buku LIKE '%$search%' OR penerbit_id LIKE '%$search%'";
}

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
            <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="admin.php">Admin</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="pengadaan.php">Pengadaan</a>
        </nav>
    </navbar>        
    <div class="card mt-5">
        <div class="card-header text-white bg-secondary">
            <div class="row">
                <h4 class="col-md-7 mt-2">Data Buku</h4>
                <div class="col-md-5">
                    <form action="" method="get">
                        <div class="input-group mt-1">
                            <input type="text" class="form-control" placeholder="search" name="search">
                            <button class="btn btn-success input-group-text text-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2   = "SELECT * FROM buku $where";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
