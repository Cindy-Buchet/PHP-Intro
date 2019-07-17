<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex: boucles</title>
</head>
<body>
<!-- EXERCICE 1 -->
    <?php
        echo "<h1>Exercice 1</h1>";
        $num = 1;
        while ($num != 10){
            echo "$num,";
            $num++;
        }
    ?>


<!-- EXERCICE 2 -->
    <?php
        echo "<h1>Exercice 2</h1>";
        $num1 = 0;
        $num2 = 2;
        while ($num1 < 20){
            $resul = $num1 * $num2;
            echo "$resul,";
            $num1++;
        }
    ?>

<!-- EXERCICE 3 -->
    <?php
        echo "<h1>Exercice 3</h1>";
        $num1 = 100;
        $num2 = 10;
        while ($num1 >= 10){
            $resul = $num1 * $num2;
            echo "$resul, ";
            $num1--;
         }
    ?>

<!-- EXERCICE 4 -->
    <?php
        echo "<h1>Exercice 4</h1>";
        $num = 1;
        $deux = 2;
        while ($num <= 10){
            echo $num + ($num / $deux) . ", ";
            $num++;
        }
    ?>

<!-- EXERCICE 5 -->
    <?php
        $num = 1;
        $tenta = "";
        $un = 1;

        echo "<h1>Exercice 5</h1>";

        while ($num <= 15){
            echo "On y est presque, ";
            $num++;
            $tenta = $tenta + $un;
        }

        echo "<p>le message s'est affiché " . $tenta . " fois.</p>";
    ?>

<!-- EXERCICE 6 -->
    <?php
        $num = 20;
        $tenta = "";
        $un = 1;

        echo "<h1>Exercice 6</h1>";

        while ($num >= 0){
            echo "C'est presque bon, ";
            $num--;
            $tenta = $tenta + $un;
        }

        echo "<p>le message s'est affiché " . $tenta . " fois.</p>";
    
    ?>

<!-- EXERCICE 7 -->
    <?php
        $num = 1;
        $tenta = "";
        $un = 1;
        $quinze = 15;

        echo "<h1>Exercice 7</h1>";

        while ($num <= 100){
            echo "On tient le bon bout, ";
            $num = $num+ $quinze;
            $tenta = $tenta + $un;
        }

        echo "<p>le message s'est affiché " . $tenta . " fois.</p>";
    ?>


<!-- EXERCICE 8 -->
<?php
        $num = 200;
        $tenta = "";
        $un = 1;
        $douze = 12;

        echo "<h1>Exercice 8</h1>";

        while ($num > 0){
            echo "Enfin !!!!, ";
            $num = $num - $douze;
            $tenta = $tenta + $un;
        }

        echo "<p>le message s'est affiché " . $tenta . " fois.</p>";
    
    ?>

</body>
</html>