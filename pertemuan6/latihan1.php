<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 6 - 18 Maret 2021
Mempelajari mengenai  Array Associative pada PHP
*/
?>
<?php 
// ARRAY
// membuat ARRAY
// $hari = array("Senin", "Selasa", "Rabu");  // cara lama
// $bulan = ["Januari", "Februari"]; // cara baru 
// $arr = [100, "halo world", true];
// // menampilkan ARRAY
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// menampilkan 1 elemen pada ARRAY
// echo $arr[0];
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan ARRAY</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #bada55;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
    <div class="kotak"><?= $b; ?> </div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>