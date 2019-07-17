<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            echo "$nom $prenom";
        }

        NomPrenom("Buchet", "Cindy");
    ?>


<!-- EXERCICE 4 -->
    <?php
        function Nombres($num1, $num2){
            
        }

    ?>
</body>
</html>