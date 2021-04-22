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
    <title>Detail <?= $games["name"]; ?></title>
</head>
<body>
<body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="card bg-secondary">
                    <div class="card image">
                        <img class="responsive-img" src="../assets/<?= $games["image"]; ?>">
                    </div>
                    <div class="card-content text-light">
                        <p style="text-align: center;">&nbsp;<?= $games["name"]; ?></p>
                        <p>RELESASE DATE</p>
                        <hr />
                        <p>&nbsp;&nbsp;<?= $games["date"]; ?></p>
                        <p>ABOUT THIS GAME</p>
                        <hr />
                        <p>&nbsp;&nbsp;<?= $games["about"]; ?></p>
                        <p>PRICE&nbsp;&nbsp;: Rp <?= $games["price"]; ?></p>
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