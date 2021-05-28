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

<body>

    <body class="color-primary">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8">
                    <div class="card bg-secondary">
                        <!-- Carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <video class="d-block w-100" controls>
                                        <source src="../assets/re8-vid.webm" type="video/webm">
                                    </video>
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/re8-img1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/re8-img2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/re8-img3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/re8-img4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/re8-img5.jpg" class="d-block w-100" alt="...">
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
                                    Buy Resident Evil Village&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href=""><button class="btn btn-success fs-6 m-1">Purchase</button></a>
                                </div>
                            </div>

                            <br>

                            <div class="card-content text-light">
                                <p>ABOUT THIS GAME</p>
                                <hr />
                                <p>Experience survival horror like never before in the eighth major installment in the storied Resident Evil franchise - Resident Evil Village.<br><br>

                                    Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location, free from their past nightmares. Just as they are building their new life together, tragedy befalls them once again.<br><br>
                                <ul>
                                    <li>First-Person Action – Players will assume the role of Ethan Winters and experience every up-close battle and terrifying pursuit through a first-person perspective.</li>
                                    <li>Familiar Faces and New Foes – Chris Redfield has typically been a hero in the Resident Evil series, but his appearance in Resident Evil Village seemingly shrouds him in sinister motives. A host of new adversaries inhabiting the village will relentlessly hunt Ethan and hinder his every move as he attempts to make sense of the new nightmare he finds himself in.</li>
                                </ul>
                                </p>
                                <p>ALL REVIEWS</p>
                                <hr />
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="../index.php" class="text-primary btn">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>


    </body>

</html>