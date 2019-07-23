<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Cindy';
$_SESSION['nom'] = 'Buchet';
$_SESSION['age'] = 23;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>Salut <?php echo $_SESSION['prenom']; ?></p>
    <p>
        <a href="varcookies2bis.php">Lien vers l'autre page</a><br />
    </p>
    </body>
</html>