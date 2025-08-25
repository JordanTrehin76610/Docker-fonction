<?php
function Carre($nombre){
    $resultat = $nombre * $nombre;
    echo "Le carré de $nombre est $resultat";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Exo3</title>
</head>




<body>
    <h1><?php Carre(5); ?></h1>
    <p><?php Carre(12); ?></p>
    <p><?php Carre(3.5); ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>