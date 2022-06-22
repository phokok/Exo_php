<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Calcul de la tva</h1>
<form action="" method="POST">
    <label for="fr">montant fr</label>
    <input type="number" name="fr" id="fr">
    <button type="submit">ENVOYER</button>
</form>

<?php

if (isset($_POST["fr"])) {
    $prix = $_POST["fr"];
    $tva = $prix * 0.18;
    if ($prix < 0) {
        echo "montant ne doit pas etre inferieur à 0";
    }
    else {
        echo "tva = $tva";
    }
}
?>
   
</body>
</html>