<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ex: conditions</title>
</head>
<body>
<!-- EXERCICE 1 -->
    <?php
        $age = 17;

        echo "<h1>Exercice 1</h1>";
        if (18 <= $age){
            echo '<p>Vous êtes majeur</p>';
        } else {
            echo '<p>Vous êtes mineur</p>';
        }
    ?>

<!-- EXERCICE 2 -->
    <?php
        $isEasy = true;

        echo "<h1>Exercice 2</h1>";

        if ($isEasy == true){
            echo "<p>C'est facile!</p>";
        } else{
            echo "<p>C'est difficile!</p>";
        }
    ?>

<!-- EXERCICE 3 -->
    <?php
        $age = 18;
        $genre = "femme";

        echo "<h1>Exercice 3</h1>";

        if (($age >= 18) && ($genre == "homme")){
            echo "<p>Vous êtes un homme et vous êtes majeur</p>";
        } else if (($age < 18) && ($genre == "homme")) {
            echo "<p>Vous êtes un homme et vous êtes mineur</p>";
        } else if (($age >= 18) && ($genre == "femme")){
            echo "<p>Vous êtes une femme et vous êtes majeur</p>";
        } else if (($age < 18) && ($genre == "femme")) {
            echo "<p>Vous êtes une femme et vous êtes mineur</p>";
        } else {
            echo "<p>Vous êtes rien</p>";
        }
    ?>

<!-- EXERCICE 4 -->
    <?php
    $magnitude = 8;

    echo "<h1>Exercice 4</h1>";
        switch ($magnitude) {
            case 1:
                echo 'Micro-séisme impossible à ressentir.';
                break;
            case 2: 
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                break;
            case 3:
                echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                break;
            case 4:
                echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                break;
            case 5:
                echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                break;
            case 6:
                echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                break;
            case 7:
                echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                break;
            case 8:
                echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                break;
            case 9:
                echo 'Séisme capable de tout détruire sur une très vaste zone.';
                break;
            default:
                echo 'Chiffre entre 1 et 9 seulement.';
        }

    ?>

<!-- EXERCICE 5 -->
    <?php
        $maVariable = "Femme";

        echo "<h1>Exercice 5</h1>";

        if ($maVariable != "Homme"){
            echo "<p>C'est une développeuse!</p>";
        } else{
            echo "<p>C'est un développeur!</p>";
        }
    ?>

<!-- EXERCICE 6 -->
    <?php
        $monAge = 18;
        echo "<h1>Exercice 6</h1>";

        if ($monAge >= 18){
            echo "<p>Tu es majeur.</p>";
        } else{
            echo "<p>Tu n'es pas majeur.</p>";
        }
        
    ?>

<!-- EXERCICE 7 -->
    <?php
        $maVariable = false;
        echo "<h1>Exercice 7</h1>";
        
        if ($maVariable == false){
            echo "<p>C'est pas bon!!!</p>";
        } else{
            echo "<p>C'est ok!!!</p>";
        }
    ?>

<!-- EXERCICE 8 -->
    <?php
        $maVariable = true;
        echo "<h1>Exercice 8</h1>";
        
        if ($maVariable){
            echo "<p>C'est ok!!</p>";
        } else{
            echo "<p>C'est pas bon!!!</p>";
        }

    ?>
</body>
</html>