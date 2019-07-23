<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Formulaire ex 6, 7 et 8</title>
</head>
<body>

<?php
    $DisplayForm = True;
    if (isset($_POST['submit'])){
        $DisplayForm = False;

        

        if(isset($_POST['prenom']) AND ($_POST['nom']) AND ($_POST['civilite']) AND ($_FILES['monfichier'])){
            echo 'Salut ' . 
            $_POST['civilite'] . ' ' . 
            $_POST['nom'] . ' '. 
            $_POST['prenom'] . '<br />Ton nom de fichier est: ' . 
            $_FILES['monfichier']['name'] . '<br />';

            if (isset($_FILES['monfichier']['type']) == "application/pdf"){
                echo 'Ton type de fichier est bien un PDF';
            } else {
                echo 'Tu dois mettre un PDF !';
            }
       
                
        } else{
            echo 'Tu dois renseigner ta civilité, ton prénom et ton nom';
        }
            
        
         }
    if ($DisplayForm){
        ?>
            <form method="post" enctype="multipart/form-data" action="formulaire6.php">
                <p>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                <p>Fichier :</p> <input type="file" name="monfichier" >

                <p>Civilité:</p>
                <select name="civilite">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>

                <p>Prénom:</p>
                <input type="text" name="prenom" />

                <p>Nom:</p>
                <input type="text" name="nom" />

                <input type="submit" value="Valider" name="submit" />
                </p>
            </form>  
        <?php   
    }
?>

  
</body>
</html>