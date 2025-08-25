<?php
function somme($nombre1, $nombre2){
    $somme = $nombre1 + $nombre2;
    echo "$nombre1 + $nombre2 = $somme";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Exo5</title>
</head>




<body>
    <h1><?= somme(12, 5) ?></h1>
    <p><?= somme(85, 42) ?></p>
    <p><?= somme(16548, 21918) ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>