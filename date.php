<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ex dates</title>
</head>
<body>
    <?php
    
date_default_timezone_set('UTC');

// Exercice 1
$today = date('j/m/Y');   
echo '<h1>Exercice 1</h1>';
echo 'Nous sommes le: ' . $today;

// Exercice 2
$today2 = date("d/m/y");
echo '<h1>Exercice 2</h1>';
echo 'Nous sommes le: ' . $today2;

// Exercice 3
$today3 = date("D j m Y "); 
echo '<h1>Exercice 3</h1>';
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo 'Nous sommes le ' . (strftime("%A %d %B %Y")); 

// Exercice 4
echo '<h1>Exercice 4</h1>';
$date = new DateTime();
echo 'Le timestamp d\'aujourd\'hui: ' . $date->getTimestamp();

$vieux_timestamp = mktime(15, 00, 00, 8, 2, 2016);
echo '<p>Le timestamp du mardi 2 août 2016 à 15h00 était : ' . $vieux_timestamp . '</p>';

// Exercice 5
echo '<h1>Exercice 5</h1>';
$datefin = date('m/j/Y');
$datedebut = '5/16/2016';
$dureesejour = (strtotime($datefin) - strtotime($datedebut)); 
$nbJours = $dureesejour/86400; // 86 400 = 60*60*24
echo "Nombre de jours qui sépare aujourd'hui au 16 mai 2016 : ". $nbJours . " jours";
 
?>


</body>
</html>