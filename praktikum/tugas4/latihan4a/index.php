<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 4 MySQL, Koneksi Database, Menampilkan Data
*/
?>

<?php

$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "pw_tubes_203040067");
$result = mysqli_query($connect, "SELECT * FROM game");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Code Gaming</title>
  </head>
  <body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
        </div>
    </div>
    </nav>

    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th></th>
                <th>GAME</th>
                <th>RELESASE DATE</th>
                <th>ABOUT THIS GAME</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
             <?php $i = 1; ?>
             <?php while($row = mysqli_fetch_assoc($result)) : ?>
             <tr>
                <td width = "200px"><image width="200px" src="assets/<?= $row["image"] ?>"></td>
                <td width = "100px"><?= $row["name"]; ?></td>
                <td width = "100px"><?= $row["date"]; ?></td>
                <td width = "500px"><?= $row["about"]; ?></td>
                <td width = "100px">Rp <?= $row["price"]; ?></td>
             </tr>
             <?php $i++ ?>
             <?php endwhile; ?>
        </tbody>
    </table>
        
    <footer class="bg-dark" style="color:white">
        <div class="container">
          <div class="row pt-3">
            <div class="col text-center">
              <p>Code Gaming Website. Copyright 2020.</p>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>