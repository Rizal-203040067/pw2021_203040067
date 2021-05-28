<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Tugas Besar
*/
?>

<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
if (isset($_POST['add'])) {
    if (add($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>;";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>;";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Form Add Game</title>
</head>

<body class="bg-dark">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <h2 class="text-light">Form Add Game</h2>
    <form action="" method="post">
        <ul class="text-light">
            <li>
                <label for="image">Image :</label><br>
                <input type="text" name="image" id="image" required><br><br>
            </li>
            <li>
                <label for="name">Game :</label><br>
                <input type="text" name="name" id="name" required><br><br>
            </li>
            <li>
                <label for="date">Release Date :</label><br>
                <input type="text" name="date" id="date" required><br><br>
            </li>
            <li>
                <label for="review">All Reviews :</label><br>
                <input type="text" name="review" id="review" required><br><br>
            </li>
            <li>
                <label for="about">About This Game :</label><br>
                <input type="text" name="about" id="about" required><br><br>
            </li>
            <li>
                <label for="price">Price :</label><br>
                <input type="text" name="price" id="price" required><br><br>
            </li>
            <br>
            <button type="submit" name="add" class="btn btn-primary">ADD</button>
            <button type="submit" class="btn">
                <a href="../index.php" class="btn btn-primary">Back</a>
            </button>
        </ul>
    </form>

</body>

</html>