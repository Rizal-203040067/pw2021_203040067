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
    $game = [
        [ 
            "image" => "1.jpg",
            "name" => "Resident Evil 4", 
            "date" => "28 Feb, 2014", 
            "about" => "Special agent Leon S. Kennedy is sent on a mission to rescue the U.S. President’s daughter who has been kidnapped. Finding his way to a rural village in Europe, he faces new threats that are a departure from the traditional lumbering zombie enemies of the earlier instalments in the series.", 
            "price" => "Rp 230 860"
        ],

        [ "image" => "2.jpg", 
           "name" => "Resident Evil 5", 
           "date" => "16 Sep, 2009", 
           "about" => "The Umbrella Corporation and its crop of lethal viruses have been destroyed and contained. But a new, more dangerous threat has emerged. Years after surviving the events in Raccoon City, Chris Redfield has been fighting the scourge of bio-organic weapons all over the world.", 
           "price" => "Rp 192 697"
        ],

        [ "image" => "3.jpg", 
           "name" => "Resident Evil 6", 
           "date" => "22 Mar, 2013", 
           "about" => "Blending action and survival horror, Resident Evil 6 promises to be the dramatic horror experience of 2013. Resident Evil favorites Leon S. Kennedy, Chris Redfield and Ada Wong are joined by new characters, including Jake Muller, to face a new horror, the highly virulent C-virus, as the narrative moves between North America, the war-torn Eastern European state of Edonia and the Chinese city of Lanshiang.", 
           "price" => "Rp 289 094"
        ],

        [ "image" => "4.jpg", 
           "name" => "Resident Evil 7", 
           "date" => "24 Jan, 2017", 
           "about" => "Resident Evil 7 biohazard is the next major entry in the renowned Resident Evil series and sets a new course for the franchise as it leverages its roots and opens the door to a truly terrifying horror experience. A dramatic new shift for the series to first person view in a photorealistic style powered by Capcom’s new RE Engine, Resident Evil 7 delivers an unprecedented level of immersion that brings the thrilling horror up close and personal.", 
           "price" => "Rp 239 999"
        ],
        
        [ "image" => "5.jpg", 
            "name" => "Resident Evil 8", 
            "date" => "7 May,2021", 
            "about" => "Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location, free from their past nightmares. Just as they are building their new life together, tragedy befalls them once again.", 
            "price" => "Rp 1 130 999"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tfoot th {
            text-align: center;
        }
    </style>
    <title>Tugas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>GAME</th>
                <th>RELESASE DATE</th>
                <th>ABOUT THIS GAME</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
             <?php $i = 1; ?>
            <?php foreach ($game as $g) : ?>
            <tr>
                <td width = "200px"><image width="200px" src="image/<?= $g["image"] ?>"></td>
                <td width = "100px"><?= $g["name"]; ?></td>
                <td width = "100px"><?= $g["date"]; ?></td>
                <td width = "500px"><?= $g["about"]; ?></td>
                <td width = "100px"><?= $g["price"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
