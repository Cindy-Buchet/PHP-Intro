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
        if (isset($_GET['langage']) AND isset($_GET['serveur'])){
            echo 'Le langage est ' . $_GET['langage'] . ' et le serveur ' . $_GET['serveur'] . ' !';
        } else  {
            echo 'Il faut renseigner un langage et un serveur !';
        }
    ?>
</body>
</html>