<?php
function Bonjour($prenom){
    echo "Bonjour $prenom";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Exo2</title>
</head>




<body>
    <h1><?php Bonjour("Jordan"); ?></h1>
    <p><?php Bonjour("Alex"); ?></p>
    <p><?php Bonjour("Casimir"); ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>