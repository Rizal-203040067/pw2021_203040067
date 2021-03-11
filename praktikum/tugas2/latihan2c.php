<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 2 Function
*/
?>
<?php
    function tumpukanbola($tumpukan) {
        for($i = 1; $i <= $tumpukan ; $i++) {
            for ($y = 1; $y <= $i; $y++) {
              echo "<div class=\"ring\"> $i</div>";
            }
        echo "<br>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan2c</title>
    <style>
        .ring{
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            border-radius: 100%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php tumpukanbola(5); ?>
</body>
</html>