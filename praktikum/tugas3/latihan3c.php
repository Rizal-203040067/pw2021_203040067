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
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        tr th {
            text-align: left;
        }
    </style>
    <title>latihan3c</title>
</head>
<body style="border: 1px solid black; padding : 10px;">
    <h4 style="font-weight: bold;">Daftar pemain bola terkenal</h4>
    
    <table width="350px">
    <?php foreach ($bola as $pemain => $club) : ?>
        <tr><?php echo "<th>$pemain</th> <td>:</td> <td>$club</td>" ?></tr>
    <?php endforeach ?>
    </table>
</body>
</html>