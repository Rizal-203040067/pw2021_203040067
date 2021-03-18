<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 3 Array
*/
?>

<?php
    $game = [
        ["1.jpg", "Resident Evil 4", "28 Feb, 2014", "Special agent Leon S. Kennedy is sent on a mission to rescue the U.S. President’s daughter who has been kidnapped. Finding his way to a rural village in Europe, he faces new threats that are a departure from the traditional lumbering zombie enemies of the earlier instalments in the series.", "Rp 230 860"],
        ["2.jpg", "Resident Evil 5", "16 Sep, 2009", "The Umbrella Corporation and its crop of lethal viruses have been destroyed and contained. But a new, more dangerous threat has emerged. Years after surviving the events in Raccoon City, Chris Redfield has been fighting the scourge of bio-organic weapons all over the world.", "Rp 192 697"],
        ["3.jpg", "Resident Evil 6", "22 Mar, 2013", "Blending action and survival horror, Resident Evil 6 promises to be the dramatic horror experience of 2013. Resident Evil favorites Leon S. Kennedy, Chris Redfield and Ada Wong are joined by new characters, including Jake Muller, to face a new horror, the highly virulent C-virus, as the narrative moves between North America, the war-torn Eastern European state of Edonia and the Chinese city of Lanshiang.", "Rp 289 094"],
        ["4.jpg", "Resident Evil 7", "24 Jan, 2017", "Resident Evil 7 biohazard is the next major entry in the renowned Resident Evil series and sets a new course for the franchise as it leverages its roots and opens the door to a truly terrifying horror experience. A dramatic new shift for the series to first person view in a photorealistic style powered by Capcom’s new RE Engine, Resident Evil 7 delivers an unprecedented level of immersion that brings the thrilling horror up close and personal.", "Rp 239 999"],
        ["5.jpg", "Resident Evil 8", "7 May,2021", "Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location, free from their past nightmares. Just as they are building their new life together, tragedy befalls them once again.", "Rp 1 130 999"]
    ];
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
            <?php foreach ($game as $g) : ?>
            <tr>
                <td width = "200px"><img width="200px" src="img/<?= $g[0] ?>"></td>
                <td width = "100px"><?= $g[1]; ?></td>
                <td width = "100px"><?= $g[2]; ?></td>
                <td width = "500px"><?= $g[3]; ?></td>
                <td width = "100px"><?= $g[4]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
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