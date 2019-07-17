<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ex: variable</title>
</head>
<body>
<!-- EXERCICE 1 -->
    <?php
    $prenom = 'Marc';
    $nom = 'Doe';
    $age = 15;

    echo "<h1>Exercice 1</h1><p>Bonjour $prenom enfant de la famille $nom ayant atteint de level $age !</p>";
    ?>

<!-- EXERCICE 2 -->
    <?php
    $km = 1;
    echo "<h1>Exerice 2</h1><p>Premier test: $km</p>";

    $km = 3;
    echo "<p>Deuxième test: $km</p>";

    $km = 125;
    echo "<p>Troisième test: $km</p>";

    ?>

<!-- EXERCICE 3 -->
    <?php
        $str = "Bonjour";
        $int = 17;
        $flo = 53.8;
        $boo = true;

        echo "<h1>Exercice 3</h1><p>Mon string: $str , mon int: $int , mon float: $flo et mon boolean $boo</p>"
    ?>

<!-- EXERCICE 4 -->
    <?php
        $nume = NULL;
        echo "<h1>Exercice 4</h1><p> $nume </p>";

        $nume = 34;

        echo "<p> $nume </p>"

    ?>

<!-- EXERCICE 5 -->

    <?php
        $add = 3 + 4;
        $mul = 5 * 20;
        $div = 45 / 5;

        echo "<h1>Exercice 5</h1><p>Résultat de mon addition: $add</p><p>Résultat de ma multiplication: $mul</p><p>Résultat de ma division: $div</p>"
    ?>

<!-- EXERCICE 6 -->

    <?php
        $prix = 785;
        $ristourne = ($prix / 100) * 30;
        $prixsolde = $prix - $ristourne;

        echo "<h1>Exercice 6</h1><p>Mon prix de base est $prix €, le montant de la ristourne est de $ristourne € donc je vais payer $prixsolde €</p>";
    ?>


</body>
</html>