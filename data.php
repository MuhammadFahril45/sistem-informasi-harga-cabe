<?php
$data = file_get_contents('data.json'); //file_get_contents () membaca seluruh file ke dalam string.
$prices = json_decode($data, true); // untuk mengubah objek json menjadi objek php
$prices = $prices["prices"]; //data menu array asosiatif
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Info Harga Cabe</title>

</head>

<body>
    <!-- Header adalah  bagian tampilan paling atas untuk menampilkan sitemap, misal seperti menu home, team, dan daftar pasar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="div container"> <!-- berfungsi untuk membungkus blok di dalamnya, sehingga terlihat rapi terhadap ukuran layar.  -->

            <a class="navbar-brand" href="#"></a>
            <img src="img/logo1.png" width="130px">   <!--Tag Image digunakan untuk menampilkan gambar kedalam halaman web -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="team.html">Team</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Daftar Pasar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Ps. Mandonga</a>
                            <a class="dropdown-item" href="#">Ps. Modern Kota Kendari</a>
                            <a class="dropdown-item" href="#">Ps. Panjang</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header --> 

    <!-- alert untuk menampilkan pesan kepada pengguna/user website kita -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-light" style="background-color: #E8B688; ">
                    Daftar <a href="https://hargapangan.id/" class="alert-link">Harga Cabai</a> di Indonesia
                </div>
                <!-- End-alert -->

                <!-- Content untuk menampilakn informasi atau isi dalam website kita -->
                <div class="container">
                    <div class="row mt-4">
                        <div class="row">
                            <?php foreach ($prices as $row) : ?> <!-- foreach merupakan perulangan khusus untuk pembacaan nilai array. -->      
                                <div class="div col-md-3">
                                    <div class="card">
                                        <img src="<?= $row["gambar"]; ?>" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row["title"]; ?></h5>
                                            <p class="card-text"><?= $row["status"]; ?></p>
                                            <h5 class="card-title"><?= $row["price"]; ?></h5>
                                            <p class="card-text"><?= $row["denom"]; ?></p>
                                            <p class="card-text"><?= $row["harga"]; ?></p>
                                            <a href="#" class="btn btn-success style=" background-color: #E8B688;><?= $row["desc"]; ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- End-Content -->

                  <!-- Footer merupakan isi  website  bagian dasar atau paling bawah dari sebuah website.?-->
                    <footer >  
                        <nav class="navbar navbar-dark text-align fixed-bottom" style="background-color: #E03334;">
                          <div class="container my-auto">
                                <div class="alert alert-light" role="alert">
                                    Design By <a href="#" class="alert-link">Kelompok 2</a>
                                </div>
                            </div>
                </div>
                </footer>
                <!-- End Footer -->

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>