<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Ex dates TP</title>
    <style>
        body{
            margin: 10px 0px;
        }
        td{
            border: 1px solid black;
            width: 10%;
        }
        th{
            border: 1px solid black;
            width: 10%;
            text-align: center;
        }
        table{
            margin-top: 20px;
        }
        form{
            display: contents;
            width: 100%;
        }
        caption{
            padding-top: 0px;
            padding-bottom: 0px;
            text-align: center;
            caption-side: inherit;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<div class="row container">
<form method="post" enctype="multipart/form-data">
            
    <div class="offset-4 col-2">
        <label for="mois">Mois</label>

            <select name="mois" class="form-control" >
                <option value="1">janvier</option>
                <option value="2">février</option>
                <option value="3">mars</option>
                <option value="4">avril</option>
                <option value="5">mai</option>
                <option value="6">juin</option>
                <option value="7">juillet</option>
                <option value="8">août</option>
                <option value="9">septembre</option>
                <option value="10">octobre</option>
                <option value="11">novembre</option>
                <option value="12">décembre</option>
            </select>
    </div>
        
    <div class="col-2 offset-1 ">
        <label for="annee">Année</label>

            <select name="annee" class="form-control ">
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select>
    </div>
    <input class="row" type="submit" value="Valider" name="submit" />
</form>
</div>

<table class="container">


<?php

$mois = 2;
$annee = 2019;

if(isset($_POST['mois'])){
    if(isset($_POST['mois']) && ($_POST['annee'])){
        $mois = $_POST['mois'];
        $annee = $_POST['annee'];
    } else {
        echo "Choisi un mois";
    }
}

echo "<caption> $mois/$annee </caption>";

// Afficher les jours sur le calendrier
$jours = array("lundi", "mardi", "mercredi", "jeudi","vendredi","samedi","dimanche");


echo "<tr>";
    for ($x = 0; $x < 7; $x++){
        echo "<th>". $jours[$x] . "</th>";
    }
echo "</tr>";


// Nombre de jours sur le mois
$tabl = cal_days_in_month(CAL_GREGORIAN, $mois, $annee); 

// Quel jour de la semaine
$ict =  date('N',strtotime("$annee/$mois/1"));
//Timeslamp 
$vieux = mktime(15, 00, 00, $mois, 0, $annee);

// Création des TR
for ($x = 1; $x <= $tabl + $ict; $x++, $day++){
    if($x > $ict){
        $vieux += 86400; // On incrémente au timestamp 86400s par jour
        $time = date('d',$vieux);    
    }

    $calcul = $x % 7;
    if ($ict >= $x AND $x == 1){
        echo "<tr> <td></td>";
    } else if ($ict >= $x){
        echo "<td></td>";
    }

    else if ($calcul == 1 && $x > 6){
        echo "<tr> <td> $time </td>";  
    } else{
        echo "<td> $time </td>"; 
    }

    if($calcul == 0){
        echo "</tr>";
    }
     
}


?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>