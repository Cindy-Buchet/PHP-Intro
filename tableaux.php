<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex: tableaux</title>
</head>
<body>
<!-- EXERCICE 1 ET 2 -->
    <?php
        echo "<h1>Exercice 1 & 2</h1>";

        $mois = array ('janvier', 'février', 'mars', 'avril', 'mai','juin','juillet','aout','septembre','octobre','novembre','décembre');

        echo "<p>$mois[2]</p>";
        echo "<p>$mois[5]</p>";
        $mois[7] = "août";
        echo $mois[7];
    ?>

<!-- EXERCICE 3 -->
    <?php
        echo "<h1>Exercice 3</h1>";
        
        $auvergne = array (01 => 'Ain', 03 => 'Allier', 07 => 'Ardèche', 15 => 'Cantal', 26 => 'Drôme', 38 => 'Isère', 42 => 'Loire', 43 => 'Haute-Loire', 63 => 'Puy-de-Dôme', 69 => 'Rhône', 73 => 'Savoie', 74 => 'Haute-Savoie' );

        echo "Le 69 est: " .$auvergne[69];
        
        $auvergne[57] = 'Metz';

        foreach ($auvergne as $index => $valeur){
            echo "<p>Le département " . $valeur . " a le numéro " . $index . "</p>";
        }

    ?>
<!-- EXERCICE 4 -->
    <?php
        echo "<h1>Exercice 4</h1>";
        $prenom = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
        
        foreach ($prenom as $index){
            echo "<p>Salut " . $index . ", devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)</p>";
        }
    
    ?>
</body>
</html>