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
    <body class="container-fluid ">
    <navbar>
            <nav class="nav nav-pills flex-column flex-sm-row mt-4">
                <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="index.php">Home</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="admin.php">Admin</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="pengadaan.php">Pengadaan</a>
            </nav>
        </navbar>
        <div class="mt-4">
                    <p class="fw-bold h4">Data Buku yang Stoknya Paling Sedikit</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>                    
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "SELECT * FROM buku ORDER BY stok ASC";
                            $q2     = mysqli_query($connect, $sql2);
                            $no   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id'];
                                $nama_buku = $r2['nama_buku'];
                                $penerbit_id = $r2['penerbit_id'];
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td scope="row"><?php echo $nama_buku ?></td>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>