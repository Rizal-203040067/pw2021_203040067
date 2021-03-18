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
        ["1.jpg", "Resident Evil 4", "28 Feb, 2014", "Special agent Leon S. Kennedy is sent on a mission to rescue the U.S. President’s daughter who has been kidnapped. Finding his way to a rural village in Europe, he faces new threats that are a departure from the traditional lumbering zombie enemies of the earlier instalments in the series.", "Rp 230 860"],
        ["2.jpg", "Resident Evil 5", "16 Sep, 2009", "The Umbrella Corporation and its crop of lethal viruses have been destroyed and contained. But a new, more dangerous threat has emerged. Years after surviving the events in Raccoon City, Chris Redfield has been fighting the scourge of bio-organic weapons all over the world.", "Rp 192 697"],
        ["3.jpg", "Resident Evil 6", "22 Mar, 2013", "Blending action and survival horror, Resident Evil 6 promises to be the dramatic horror experience of 2013. Resident Evil favorites Leon S. Kennedy, Chris Redfield and Ada Wong are joined by new characters, including Jake Muller, to face a new horror, the highly virulent C-virus, as the narrative moves between North America, the war-torn Eastern European state of Edonia and the Chinese city of Lanshiang.", "Rp 289 094"],
        ["4.jpg", "Resident Evil 7", "24 Jan, 2017", "Resident Evil 7 biohazard is the next major entry in the renowned Resident Evil series and sets a new course for the franchise as it leverages its roots and opens the door to a truly terrifying horror experience. A dramatic new shift for the series to first person view in a photorealistic style powered by Capcom’s new RE Engine, Resident Evil 7 delivers an unprecedented level of immersion that brings the thrilling horror up close and personal.", "Rp 239 999"],
        ["5.jpg", "Resident Evil 8", "7 May,2021", "Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location, free from their past nightmares. Just as they are building their new life together, tragedy befalls them once again.", "Rp 1 130 999"]
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
                <td width = "200px"><img width="200px" src="img/<?= $g[0] ?>"></td>
                <td width = "100px"><?= $g[1]; ?></td>
                <td width = "100px"><?= $g[2]; ?></td>
                <td width = "500px"><?= $g[3]; ?></td>
                <td width = "100px"><?= $g[4]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
