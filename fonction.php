<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex: fonctions</title>
</head>
<body>
<!-- EXERCICE 1 -->
    <?php 
    echo "<h1>Exercice 1</h1>";

        function DireBonjour()
        {
            $boo = true;
            echo $boo;
        }
        
        DireBonjour();
    ?>

<!-- EXERCICE 2 --> 
    <?php
        echo "<h1>Exercice 2</h1>";

        function Carac($chaine)
        {
            echo $chaine;
        }

        Carac("Bonjour tout le monde");
    ?>

<!-- EXERCICE 3 -->
    <?php 
        echo "<h1>Exercice 3</h1>";

        function NomPrenom($nom, $prenom){
            echo $nom . " " . $prenom;
        }

        NomPrenom("Buchet", "Cindy");
    ?>


<!-- EXERCICE 4 -->
    <?php
        echo "<h1>Exercice 4</h1>";

        function Nombres($num1, $num2){
            if ($num1 > $num2){
                echo "Le premier nombre est plus grand";
            } else if ($num1 < $num2){
                echo "Le premier nombre est plus petit";
            } else if ($num1 == $num2){
                echo "Les deux nombres sont identiques";
            }
        }

        Nombres(10, 6);

    ?>

<!-- EXERCICE 5 -->
    <?php
        echo "<h1>Exercice 5</h1>";

        function ChaCar($chaine, $caract){
            echo $chaine . " " . $caract;
        }   

        ChaCar("J'en ai ", 15);
    ?>

<!-- EXERCICE 6 -->
    <?php

        echo "<h1>Exercice 6</h1>";
        function Phrase($nom, $prenom, $age){
            echo "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans";
        }
    
        Phrase("Buchet", "Cindy", 23);
    ?>

<!-- EXERCICE 7 --> 
    <?php
        echo "<h1>Exercice 7</h1>";

        function GenreAge($age, $genre){
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
        }
        GenreAge(18, "homme");

    ?>

<!-- EXERCICE 8 -->
    <?php 
        echo "<h1>Exercice 8</h1>";
        $num1 = 3;
        $num2 = 9;
        $num3 = 10;
        
        function Addition($num1, $num2, $num3){
            echo $num1 + $num2 + $num3;
        }

        Addition(10, 22, 45);
    ?>
</body>
</html>