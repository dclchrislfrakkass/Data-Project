<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>

</head>


<div id="map"style="width:400px; height:400px"></div>

<?php
require 'pdo.php';
?>

<form  method="post" name="myform" action="">

<input type="text" name="cle"><br>
</form>


<?php
$cle = "'%".$_POST['cle']."%'";


$stmt = $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");
$stmt->execute();
$results = $stmt->fetchAll();

$stmt->execute(array($cle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    $lat = $resultat['Latitude'];
    $long = $resultat['Longitude'];
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb'].'<b> latitude : </b>'.$resultat['Latitude']. '<b>longitude : </b>'.$resultat['Longitude']);
    echo '<br />';


}

?>

<script>
var lat ="<?php echo $lat ?>";
var long ="<?php echo $long ?>";
var map = L.map('map').setView([lat , long], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// L.marker([51.5, -0.09]).addTo(map)
//     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
//     .openPopup();
</script>