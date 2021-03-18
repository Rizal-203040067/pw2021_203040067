<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 3 Array
*/
?>

<?php

$bola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"]; 

?>

<!DOCTYPE html>
<html>
<head>
    <title>latihan3b</title>
</head>
<body>
    <h4 style="font-weight: bold;">Daftar pemain bola terkenal</h4>


        <ol>
        <?php for($i = 0; $i < count($bola); $i++) { ?>
            <?= "<li>$bola[$i]</li>" ?>
        <?php } ?>
        </ol>

    <h4 style="font-weight: bold;">Daftar pemain bola terkenal baru</h4>

        
        <ol>
        <?php $bola[] = "Luca Modric"; $bola[] = "Sadio Mane"; $baru = sort($bola)?>
        <?php for($i = 0; $i < count($bola); $i++) { ?>
            <?= "<li>$bola[$i]</li>" ?>
        <?php } ?>    
        </ol>
        
    
</body>
</html>

