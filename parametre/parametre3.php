<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){
            echo 'La date de début est ' . $_GET['dateDebut'] . ' et celle de fin est ' . $_GET['dateFin'] . ' !';
        } else  {
            echo 'Il faut renseigner une date de début et de fin !';
        }
    ?>
</body>
</html>