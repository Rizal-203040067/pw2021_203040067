<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 2 Function
*/
?>
<?php
function hitungDeterminan($a, $b, $c, $d) {

    // baris code perhitungan determinan
    $hasil = (($a * $d)-($b * $c));

    // menampilkan matriks
    echo"<table style='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5'; cellpadding:'5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
            </table>";
    echo "Determinan dari matriks tersebut adalah $hasil"; // menampilkan Teks dibawah matriks
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan2d</title>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4); ?> <!-- Memanggil function hitungDeterminan -->
</body>
</html>