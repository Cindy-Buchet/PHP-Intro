<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_GET['prenom'] . ' '. $_GET['nom']; ?> !</p>

    <p>Si tu veux changer de prénom ou de nom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>  
</body>
</html>