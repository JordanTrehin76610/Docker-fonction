<?php
function longueur($texte) {
    $caractère = strlen($texte);
    echo "Dans la phrase suivante: '$texte', il y a $caractère caractères.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Exo7</title>
</head>




<body>
    <h1><?= longueur("Salut à tous") ?></h1>
    <p><?= longueur("") ?></p>
    <p><?= longueur("Oulalalalalalah") ?></p>
    <p><?= longueur("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque similique asperiores vero veniam aut error dolore numquam voluptatum nam dicta ducimus laudantium accusantium porro eius sequi ex dolorum, quasi rem!
    Veritatis, alias ab? Error perspiciatis quidem iusto ad fuga reiciendis quibusdam eum ea, mollitia repudiandae ab provident quo eaque laboriosam. Quae maxime quis fugiat error non dignissimos laborum asperiores ab.") ?></p>
    <button onclick="window.location.href='../index.php'">Retour</button>
</body>




</html>