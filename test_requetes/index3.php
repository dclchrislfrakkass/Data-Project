
<head>
<!--
Inclusion de la bibliothèque Leaflet et sa feuille de style.
L'include du js pourrait aussi être fait a la fin du <body>
-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
crossorigin=""></script>

<!-- Une feuille de style éventuel -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>


<h1>par la carte ?</h1>
<div id="carte" style="width:400px; height:400px"></div>


<?php
require 'pdo.php';


// ?>


<form  method="post" name="myform" action="">
<!-- <input type="text" name="motCle" maxlength="80" size="30"> -->
<input type="text" name="cle"><br>
<!-- <label for="date1">Par date du: </label> -->
<!-- <input type="number" name="date1">
//     <label for="date2">Au: </label>
//     <input type="number" name="date2"><br>
//     <input type="submit" value="Submit" > -->
</form>


<?php

$cle = "'%".$_POST['cle']."%'";


$stmt = $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");
$stmt->execute();
$results = $stmt->fetchAll();
// $json = json_encode($results);
// echo json_encode($json);

// $stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");
// $fmap = $bd->prepare("SELECT Latitude, Longitude FROM `Cas` WHERE id =");
$stmt->execute(array($cle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    $lat = $resultat['Latitude'];
    $long = $resultat['Longitude'];
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb'].'<b> latitude : </b>'.$resultat['Latitude']. '<b>longitude : </b>'.$resultat['Longitude']);
    echo '<br />';

    
    ///////////////JSON TEST
    // $json = "lieu: ".$resultat['NomEtude'].$resultat['Latitude'].$resultat['Longitude'];
    // $info = json_encode($json);    
    // $file = fopen('coordonnees.json','w+') or die("File not found");
    // fwrite($file, $info);
    // fclose($file);
    // die;
    //////////////////////////





    // echo '<br />';
    // var_dump($resultat);
    // var_dump('<br/><br/> LAT:'.$lat);
    // var_dump('<br/><br/> LONG:'.$long);
    
    // var_dump(marker);
    // echo $resultat['NomEtude'];
}

?>

<script>
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'your.mapbox.access.token'
    }).addTo(mymap);
    var marker = L.marker([51.5, -0.09]).addTo(mymap);
    
    

    // // Note "var i", not "$i". This is the browser iterating through "data".
    // for (var i = 0; i < data.length; i++)
    // {
    //     // Note how "L.marker()" runs only in the browser,
    //     // well outside of the <?php ?> tags. PHP doesn't know, nor 
    //     // it cares, about Leaflet.
    //     L.marker(data[i].lat, data[i].lng).addTo(mymap);

    //     // Accessing the properties of the data depends on the structure
    //     // of the data. You might want to do stuff like
    //     console.log(data);
    //     // while remembering to use the developer tools (F12) in your browser.
    // }

</script>

// <script>

// var bourges = [47.081012, 2.398781999999983];

// var map = L.map('map').setView(bourges, 6);


// //création du calque images
// L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
//     maxZoom: 20
// }).addTo(map);

// var marker = L.marker(bourges).addTo(map);
// // var marker = L.marker(bourges).addTo(map);
// // var marker = L.marker(48,5).addTo(carte);

// </script>