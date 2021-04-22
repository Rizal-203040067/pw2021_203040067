<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 6 Session, Cookie, Encryption
*/
?>

<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$games = query("SELECT * FROM game WHERE id = $id")[0];

if (isset($_POST['update'])) {
    if (update($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>;";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
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

    <title>Form Update Game</title>
</head>
<body class="bg-dark">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <h2 class="text-light">Form Update Game</h2>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $games['id']; ?>">
        <ul class="text-light">
            <li>
                <label for="image">Image :</label><br>
                <input type="text" name="image" id="image" required value="<?= $games['image']; ?>"><br><br>
            </li>
            <li>
                 <label for="name">Game :</label><br>
                <input type="text" name="name" id="name" required value="<?= $games['name']; ?>"><br><br>
            </li>
            <li>
                <label for="date">Release Date :</label><br>
                <input type="text" name="date" id="date" required value="<?= $games['date']; ?>"><br><br>
            </li>
            <li>
                <label for="about">About This Game :</label><br>
                <input type="text" name="about" id="about" required value="<?= $games['about']; ?>"><br><br>
            </li>
            <li>
                <label for="price">Price :</label><br>
                <input type="text" name="price" id="price" required value="<?= $games['price']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
            <button type="submit" class="btn">
                <a href="../index.php" class="btn btn-primary">Back</a>
            </button>
        </ul>
    </form>
    
</body>
</html>