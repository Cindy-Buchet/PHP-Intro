<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cookies ex 3</title>
    </head>
    <body>
    <?php
        if(isset($_POST['pseudo']) && ($_POST['mdp'])) // Si le formulaire a été envoyé...
        {
            setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); // On créé le cookie, c'est IMPORTANT !
            setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true); // On créé le cookie, c'est IMPORTANT !
            header("Location: varcookies3bis.php"); // Et on actualise la page pour que ce script marche à 100% !!!
        }
    ?>
    
    <form method="post"> 
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo'];?>" /> 

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" value="<?php if(isset($_COOKIE['mdp'])) echo $_COOKIE['mdp']; ?>" />

        <input type="submit" value="Envoyer" />
    </form>
    
    </body>
</html>