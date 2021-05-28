<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Tugas Besar
*/
?>

<?php

// Memeriksa apakah ada ID yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$games = query("SELECT * FROM game WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Detail <?= $games["name"]; ?></title>
</head>

<body class="color-primary">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg nav-color color-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php"><img class="img-fluid" style="width: 25px; height:25px; margin: 8px 0 5px 10px;" src="../assets/admin2.png" alt=""></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input type="text" name="keyword" autofocus class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
        <div class="row">
            <!-- Main Detail -->
            <div class="col color-secondary">
                <div class="card color-secondary">
                    <!-- Carousel -->
                    <div id="carouselExampleIndicators" class="carousel slide pt-3" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/<?= $games["img1"]; ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/<?= $games["img2"]; ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/<?= $games["img3"]; ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/<?= $games["img4"]; ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/<?= $games["img5"]; ?>" class="d-block w-100" alt="...">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <br><br>

                    <div class="card">
                        <div class="card-body fs-4">
                            <?= $games["purchase"]; ?><a href=""><button class="btn btn-success fs-5 m-1">Purchase</button></a>
                        </div>
                    </div>

                    <br>

                    <div class="card-content text-light">
                        <p class="text-primary">ABOUT THIS GAME</p>
                        <hr>
                        <p><?= $games["about"]; ?></p>

                        <br>

                        <p class="text-primary">SYSTEM REQUIREMENTS</p>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col system-text">
                                    <?= $games["minsystem"]; ?>
                                </div>

                                <div class="col system-text">
                                    <?= $games["recsystem"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action pt-5 pb-3">
                        <a href="../index.php"><button type="submit" class="btn btn-primary">Back</button></a>
                    </div>
                </div>
            </div>

            <!-- Sub Detail -->
            <div class="col-3">
                <div class="card border border-primary checkbox text-light" style="width: 18rem;">
                    <div class="card-header">
                        Sub Detail
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-top  border-primary color-primary text-light">
                            Title: <?= $games["name"]; ?>
                        </li>
                        <li class="list-group-item  border-primary color-primary text-light">
                            Genre: <?= $games["genre"]; ?>
                        </li>
                        <li class="list-group-item  border-primary color-primary text-light">
                            Developer: CAPCOM Co., Ltd.
                        </li>
                        <li class="list-group-item  border-primary color-primary text-light">
                            Publisher: CAPCOM Co., Ltd.
                        </li>
                        <li class="list-group-item  border-primary color-primary text-light">
                            Franchise: Resident Evil
                        </li>
                        <li class="list-group-item  border-primary color-primary text-light">
                            Release Date: <?= $games["date"]; ?>
                        </li>
                        <li class="list-group-item  border-primary color-primary text-light">
                            All Reviews: <?= $games["review"]; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="color-primary nav-color mt-4" style="color:white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>Code Gaming Website. Copyright 2020.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Tooltip -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>