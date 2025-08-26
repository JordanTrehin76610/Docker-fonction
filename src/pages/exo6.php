<?php
function maximum($nombre1, $nombre2) {
    if ($nombre1 > $nombre2) {
        echo "$nombre1 est plus grand que $nombre2";
    } else if ($nombre2 > $nombre1) {
        echo "$nombre2 est plus grand que $nombre1";
    } else {
        echo "C'est les mêmes nombres débile !";
    }
}

function maximumMulti(...$tableauNB) { //... Car c'est un tableau
    $max = $tableauNB[0];
    $position = 1;
    foreach ($tableauNB as $index => $nb) {
        if ($nb > $max) {
            $max = $nb;
            $position = $index+1;
        }
    }
    if ($position == 1) {
        echo "Le maximum est $max, c'est le $position er nombre.";
    } else {
        echo "Le maximum est $max, c'est le $position ème nombre.";
    } 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Exo6</title>
</head>




<body>
    <h1><?= maximum(12, 45) ?></h1>
    <p><?= maximum(45, 25) ?></p>
    <p><?= maximum(2, 2) ?></p>
    <h2>Maximum Multi</h2>
    <p><?= maximumMulti(12, 13, 25, 14, 48, 16) ?></p>
    <p><?= maximumMulti(2, 3) ?></p>
    <p><?= maximumMulti(415, 23, 198, 12, 0, -145) ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>