<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 1 Stuktur Kontrol
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>latihan1c</title>
    <style>
        .clear{
            clear: left;
        }
        .ring{
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            border-radius: 100%;
            float: left;
            margin: 5px;
        }
        .ring p{
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        for($i = 1; $i <= 3; $i++):
            for ($y = 1; $y <= $i; $y++): ?>
                <div class="ring">
                    <p><?= $i ?></p>
                </div>
            <?php endfor;?>
        <div class="clear"></div>
        <?php endfor;?>
        
        
</body>
</html>