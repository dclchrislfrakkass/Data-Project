
<head>
    <!--
            Inclusion de la bibliothèque Leaflet et sa feuille de style.
            L'include du js pourrait aussi être fait a la fin du <body>
        -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
    <!-- Une feuille de style éventuel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<h1>par la carte ?</h1>
<div id="macarte" style="width:400px; height:400px"></div>
<script>
var carte = L.map('macarte').setView([46.3630104, 2.9846608], 6);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);
    



function getColor(d) {
    return d > 1000 ? '#800026' :
        d > 500  ? '#BD0026' :
        d > 200  ? '#E31A1C' :
        d > 100  ? '#FC4E2A' :
        d > 50   ? '#FD8D3C' :
        d > 20   ? '#FEB24C' :
        d > 10   ? '#FED976' :
                    '#FFEDA0';
}

//////////////////ajouter marker rond rouge



////////////////////ajouter du texte en bulle
// var marker = L.marker([47.081012, 2.398781999999983]).addTo(carte);
// marker.bindPopup(''); // Je ne mets pas de texte par défaut
// var mapopup = marker.getPopup();
// mapopup.setContent('Bourges et les aliens'); // je personnalise un peu avant d'afficher
// marker.openPopup();


//////////////ajouter un marqueur où on clic
// carte.on('click', placerMarqueur);

// function placerMarqueur(e) {
//     // Faire quelque chose suite à l’événement
//     marker.setLatLng(e.latlng);
// }
</script>
Bourges

<?php
require 'pdo.php';
// require 'requete.php';
// require 'test.php';

?>


<form  method="post" name="myform" action="">
    <!-- <input type="text" name="motCle" maxlength="80" size="30"> -->
    <input type="text" name="cle"><br>
    <label for="date1">Par date du: </label>
    <input type="number" name="date1">
    <label for="date2">Au: </label>
    <input type="number" name="date2"><br>
    <input type="submit" value="Submit" >
</form>


<?php

// $cle = "'%".$_POST['cle']."%'";

// $stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");

// $stmt->execute(array($cle));

// $resultats = $stmt->fetchAll();



// $sdate1 = $_POST['date1'];
// var_dump($sdate1);
// $sdate2 = $_POST['date2'];
// var_dump($sdate2);

// $stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
// $stmt2->execute(array());
// var_dump($stmt2);

// $resultats2 = $stmt2->fetchAll();

// foreach($resultats2 as $resultat) {
//     var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
//     echo '<br />';
//     echo '<br />';
// };