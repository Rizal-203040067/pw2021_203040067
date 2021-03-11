<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 2 Function
*/
?>

<?php
function gantiStyle($tulisan, $style1, $style2){
    return "<div class='$style1 $style2'>$tulisan</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>latihan2a</title>
    <style>
    .kalimat {
        font-size: 28px;
        font-family: arial;
        color: #8c782d;
        font-style: italic;
        font-weight: bolder;
    }

    .kotak {
        border: 2px solid black;
        box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 5px;
    }
    </style>
</head>
<body>
    <?= gantiStyle('Selamat datang di praktikum PW','kalimat','kotak')?>
</body>
</html>