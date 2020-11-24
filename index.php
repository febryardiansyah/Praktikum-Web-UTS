<?php
    $index = 1;
    $player = [
        ["Cristiano Messi", "180", "Striker"],
        ["Bejo Leonardo", "167", "Midfielder"],
        ["Alfa Midi", "190", "Defender"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Table Pemain</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tinggi Badan</th>
                    <th scope="col">Posisi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($player as $p):?>
                <tr>
                    <th scope="row"><?=$index?></th>                    
                    <td><?=$p[0];?></td>
                    <td><?=$p[1];?></td>
                    <td><?=$p[2];?></td>
                    <?php $index++?>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>