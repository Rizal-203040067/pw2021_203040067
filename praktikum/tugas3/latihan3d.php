<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 3 Array
*/
?>

<?php

$bola = [
    ["Cristiano Ronaldo", "Juventus", "100", "76", "30"],
    ["Lionel Messi", "Barcelona", "120", "80", "12"],
    ["Luca Modric", "Real Madrid", "87", "12", "48"],
    ["Mohammad Salah", "Liverpool", "90", "103", "8"],
    ["Neymar Jr", "Paris Saint German", "109", "56", "15"],
    ["Sadio Mane", "Liverpool", "63", "30", "70"],
    ["Zlatan Ibrahimovic", "Ac Milan", "100", "10", "12"],
];

$jmain = 0;
$jgol = 0;
$jassist = 0;
foreach ($bola as $b => $j) {
    $jmain += $j[2];
    $jgol += $j[3];
    $jassist += $j[4];
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
        }

        tfoot th {
            text-align: center;
        }
    </style>
    <title>latihan3d</title>
</head>
<body>
<table style="width:50%">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th> 
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($bola as $b) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $b[0]; ?></td>
            <td><?= $b[1]; ?></td>
            <td><?= $b[2]; ?></td>
            <td><?= $b[3]; ?></td>
            <td><?= $b[4]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td>#</td>
            <th colspan="2">Jumlah</th>
            <td><?= $jmain ?></td>
            <td><?= $jgol ?></td>
            <td><?= $jassist ?></td>
        </tr>
    </tfoot>
  
  
  
</table>
</body>
</html>