
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


var bourges = [47.081012, 2.398781999999983];
L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
    maxZoom: 20
}).addTo(carte);
var marker = L.marker(bourges).addTo(carte);
// var marker = L.marker(48,5).addTo(carte);
</script>


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
    
    $stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");
    $fmap = $bd->prepare("SELECT Latitude, Longitude FROM `Cas` WHERE id =");
    $stmt->execute(array($cle));
    
    $resultats = $stmt->fetchAll();
    
    foreach($resultats as $resultat) {
        $lat = $resultat['Latitude'];
        $long = $resultat['Longitude'];
        var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb'].'<b> latitude : </b>'.$resultat['Latitude']. '<b>longitude : </b>'.$resultat['Longitude']);
        echo '<br />';
        echo '<br />';
        var_dump($resultat);
        var_dump('<br/><br/> LAT:'.$lat);
        var_dump('<br/><br/> LONG:'.$long);
        var_dump(marker);
    }
    
    ?>
    <script>
    var marker = L.marker(48,5).addTo(carte);