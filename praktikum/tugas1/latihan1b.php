<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 1 Stuktur Kontrol
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan1b</title>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th></th>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <th>Kolom <?= $i; ?></th>
        <?php endfor; ?>
    </tr>
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <tr>
            <th>Baris <?= $i ?></th>
                <?php for( $j = 1; $j <= 5; $j++) : ?>
                    <td><?= "Baris $i, Kolom $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

</table>
    
</body>
</html>