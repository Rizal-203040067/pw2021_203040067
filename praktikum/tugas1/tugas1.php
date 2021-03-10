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
        .salmon {
            background-color: salmon;
        }

        .blue {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="4" cellpadding="10">
        <!-- Untuk mengatur Baris  -->
        <?php for($i = 1 ; $i <= 6; $i++): ?>
            <!-- Baris Ganjil -->
            <?php if($i%2 == 1):?>
                <!-- Untuk mengatur Kolom  -->
                <?php for($j = 1 ; $j <= 6; $j++): ?>
                    <!-- Kolom Ganjil -->
                    <?php if($j%2 == 1 ): ?>
                        <td class="blue">
                    <!-- Kolom Genap -->
                    <?php else :?>
                        <td class="salmon">
                    <?php endif; ?>
                <?php endfor;?>

            <!-- Baris Genap -->
            <?php else:?>
                <!-- Untuk mengatur Kolom  -->
                <?php for($j = 1 ; $j <= 6; $j++): ?>
                    <!-- Kolom Genap -->
                    <?php if($j%2 == 0 ): ?>
                        <td class="blue">
                    <!-- Kolom Ganjil -->
                    <?php else :?>
                        <td class="salmon">
                    <?php endif; ?>
                <?php endfor;?>
            <?php endif;?>
        
        <tr>
        <?php endfor; ?>
    </table>
</body>
</html>