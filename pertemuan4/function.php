<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 4 - 4 Maret 2021
Mempelajari mengenai Function pada PHP
*/
?>
<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Rizal"); ?></h1>
</body>
</html>