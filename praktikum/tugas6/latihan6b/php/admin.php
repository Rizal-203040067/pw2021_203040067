<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 6 Session, Cookie, Encryption
*/
?>

<?php

require 'functions.php';

if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $games = query("SELECT * FROM game WHERE
          name LIKE '%$keyword%' OR
          price LIKE '%$keyword%' ");
} else {
  $games = query("SELECT * FROM game");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Admin Code Gaming</title>
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
        <li class="nav-item">
          <a href="login.php"><img class="img-fluid" style="width: 25px; height:25px; margin: 8px 0 5px 10px;" src="../assets/admin2.png" alt=""></a>
        </li>
        <li class="nav-item logout">
          <a href="logout.php" style="padding: 10px 0 0 10px;">Logout</a>
        </li>
      </ul>
      <form action="" method="get" class="d-flex">
        <input type="text" name="keyword" autofocus class="form-control me-2" placeholder="Search" aria-label="Search">
        <button type="submit" name="search" class="btn btn-outline-primary" >Search</button>
      </form>
        </div>
    </div>
    </nav>

    <div class="add px-4 pt-3">
      <a href="add.php"><button type="button" class="btn btn-primary">ADD</button></a>
    </div>

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
          <?php if (empty($games)) : ?>
             <tr>
               <td colspan="7">
                  <h1 style="text-align: center;">Data tidak ditemukan</h1>
               </td>
             </tr>
          <?php else : ?>
             <?php $i = 1; ?>
             <?php foreach($games as $game) : ?>
             <tr>
                <td width = "200px"><image width="200px" src="../assets/<?= $game['image'] ?>"></a></td>
                <td width = "100px"><?= $game['name']; ?></a></td>
                <td width = "100px"><?= $game['date']; ?></td>
                <td width = "500px"><?= $game['about']; ?></td>
                <td width = "100px">Rp <?= $game['price']; ?></td>
                <td class="col-2">
                    <a href="update.php?id=<?= $game['id'] ?>"><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a href="delete.php?id=<?= $game['id'] ?>" onclick="return confirm('Hapus Data??')"><button type="button" class="btn btn-danger">DELETE</button></a>
                </td>
             </tr>
             <?php $i++ ?>
             <?php endforeach; ?>
          <?php endif; ?>
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