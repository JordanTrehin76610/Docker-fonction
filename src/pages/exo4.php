<?php
function estPair($nombre){
    if ($nombre % 2 == 0) {
        return true;
    } else {
        return false;
    }
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
    <h1><?= estPair(14986) == true ? "14986 est pair" : "14986 est impair"; ?></h1>
    <p><?= estPair(12) == true ? "12 est pair" : "12 est impair"; ?></p>
    <p><?= estPair(37) == true ? "37 est pair" : "37 est impair"; ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>