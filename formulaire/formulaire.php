<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Cette page ne contient que du HTML.<br />
        Veuillez taper votre prénom et nom :
    </p>

    <form action="user.php" method="get">
        <p>
            <p>Prénom:</p>
            <input type="text" name="prenom" />
            <p>Nom:</p>
            <input type="text" name="nom" />
            <input type="submit" value="Valider" />
        </p>
    </form>
</body>
</html>