<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 2 Function
*/
?>

<?php

$jawabanIsset = "Isset adalah = fungsi yang akan menentukan suatu variabel akan dianggap sebagai himpunan atau tidak, ini berarti jika suatu variabel dideklarasikan maka hasilnya tidak akan menjadi null<br><br>";
$jawabanEmpty = "Empty adalah = fungsi yang akan menentukan suatu variabel dianggap kosong";

$GLOBALS['jawabanIsset'] = $jawabanIsset ;
$GLOBALS['jawabanEmpty'] = $jawabanEmpty ;

function soal($style){
    return "<div class ='$style'>"
     . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] .
     "</div>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>latihan2b</title>

    <style>
    .kalimat {
        border: 1px solid black;
        font-family: arial;
        padding: 10px;
        font-size: medium;
    }
    </style>
</head>
<body>
    <?= soal('kalimat')?>
</body>
</html>