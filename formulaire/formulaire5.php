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

    <form action="user5.php" method="get">
        <p>
            <p>Civilité:</p>
            <select name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>

            <p>Prénom:</p>
            <input type="text" name="prenom" />

            <p>Nom:</p>
            <input type="text" name="nom" />

            <input type="submit" value="Valider" />
        </p>
    </form>
</body>
</html>