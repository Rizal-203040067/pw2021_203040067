<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Tugas Besar
*/
?>

<?php

require 'php/functions.php';

if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $games = query("SELECT * FROM game WHERE
          name LIKE '%$keyword%'");
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

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Tooltip -->
  <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js">

  <title>Code Gaming</title>
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
            <a href="php/login.php"><img class="img-fluid" style="width: 25px; height:25px; margin: 8px 0 5px 10px;" src="./assets/admin2.png" alt=""></a>
          </li>
        </ul>
        <form class="d-flex">
          <input type="text" name="keyword" autofocus class="form-control me-2" placeholder="Search" aria-label="Search">
          <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <br>
  <br>

  <div class="container">
    <div class="row">
      <table class="table col color-secondary text-primary">
        <thead>
          <tr>
            <th></th>
            <th>GAME</th>
            <th>RELESASE DATE</th>
            <th>&nbsp;&nbsp;&nbsp;ALL REVIEWS</th>
            <th>PRICE</th>
          </tr>
        </thead>
        <tbody class="text-light">
          <?php if (empty($games)) : ?>
            <tr>
              <td colspan="7">
                <h1 style="text-align: center;">Data tidak ditemukan</h1>
              </td>
            </tr>
          <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($games as $game) : ?>
              <tr>
                <td><a href="php/detail.php?id=<?= $game["id"]; ?>">
                    <image width="200px" src="assets/<?= $game["image"] ?>">
                  </a></td>
                <td><a href="php/detail.php?id=<?= $game["id"]; ?>"><?= $game["name"]; ?></a></td>
                <td><?= $game["date"]; ?></td>
                <td class="text-center"><img src="./assets/review.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $game["review"]; ?>"> </td>
                <td>Rp <?= $game["price"]; ?></td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>


      <div class="col-3">

        <div class="card border border-primary checkbox text-primary" style="width: 18rem;">
          <div class="card-header">
            Price
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item border-top  border-primary color-primary text-primary">
              <input type="range" class="form-range" min="0" max="5" id="customRange2">

            </li>
          </ul>
        </div>

        <br>

        <div class="card border border-primary checkbox text-primary" style="width: 18rem;">
          <div class="card-header">
            Genre
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item border-top  border-primary color-primary text-primary">
              <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
              JPRG
            </li>
            <li class="list-group-item  border-primary color-primary text-primary">
              <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
              Multipalyer
            </li>
            <li class="list-group-item  border-primary color-primary text-primary">
              <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
              Role-playing
            </li>
            <li class="list-group-item  border-primary color-primary text-primary">
              <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
              Single-player
            </li>
            <li class="list-group-item  border-primary color-primary text-primary">
              <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
              Survival Horror
            </li>
            <li class="list-group-item  border-primary color-primary text-primary">
              <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
              Third Person Shooter
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class="color-primary nav-color" style="color:white">
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