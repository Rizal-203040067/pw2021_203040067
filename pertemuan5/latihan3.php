<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 5 - 10 Maret 2021
Mempelajari mengenai pengulangan untuk Array pada PHP
*/
?>
<?php
$mahasiswa = [
    ["Sandika Galih", "043040023", "Teknik Informatika", "sandikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["023040123", "Erik", "Teknik Planologi", "erik@gmail.com"],

];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $m ) : ?>
<ul>
    <li>Nama : <?= $m[0]; ?></li>
    <li>NRP : <?= $m[1]; ?></li>
    <li>Jurusan : <?= $m[2]; ?></li>
    <li>Email : <?= $m[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>

<!-- bisa digunakan untuk 1 array dengan lebih efisien -->
<ul>
    <?php foreach( $mahasiswa as $m ) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul>