<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 3 - 25 Februari 2021
Mempelajari mengenai struktur kendali PHP
*/
?>
<?php
// if else
// if else if else
// ternary
// switch

// $x = 2;
// if( $x < 20 ) {
//     echo "benar";
// } else if( $x == 20) {
//     echo"bingo!";
// } else {
//     echo "salah";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if ( $i %2 == 0 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
    
</body>
</html>