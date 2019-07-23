<?php
session_start(); // On démarre la session AVANT toute chose
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>Re-bonjour!</p>
    <p>Tu t'appelles 
        <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !</p>
        <p>Tu as <?php echo $_SESSION['age']; ?> ans.</p>
    <p>
        <a href="varcookies2.php">Lien vers l'autre page</a><br />
    </p>
    </body>
</html>