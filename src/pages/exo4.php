<?php
function estPair($nombre){
    return $nombre % 2 == 0;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Exo4</title>
</head>




<body>
    <h1><?= estPair(14986) ? "14986 est pair" : "14986 est impair"; ?></h1>
    <p><?= estPair(12) ? "12 est pair" : "12 est impair"; ?></p>
    <p><?= estPair(37) ? "37 est pair" : "37 est impair"; ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>