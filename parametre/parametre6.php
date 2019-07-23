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
        if (isset($_GET['batiment']) AND isset($_GET['salle'])){
            echo 'Bâtiment ' . $_GET['batiment'] . ' et salle ' . $_GET['salle'] . ' !';
        } else  {
            echo 'Il faut renseigner un batiment et une salle !';
        }
    ?>
</body>
</html>