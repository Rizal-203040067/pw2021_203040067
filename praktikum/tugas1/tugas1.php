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
    <title>Latihan 2</title>
    <style>
        .warna1 {
            background-color: salmon;
        }

        .warna2 {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="4" cellpadding="10">

        <?php for($i = 1 ; $i <= 6; $i++): ?>
            <?php if($i%2 == 1):?>
                <?php for($j = 1 ; $j <= 6; $j++): ?>
                    <?php if($j%2 == 1 ): ?>
                        <td class="warna2"><?= "";?></td>
                    <?php else :?>
                        <td class="warna1"></td>
                    <?php endif; ?>
                <?php endfor;?>


            <?php else:?>
                <?php for($j = 1 ; $j <= 6; $j++): ?>
                    <?php if($j%2 == 1 ): ?>
                        <td class="warna1"><?= "";?></td>
                    <?php else :?>
                        <td class="warna2"></td>
                    <?php endif; ?>
                <?php endfor;?>
            <?php endif;?>
        
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>