<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    

</head>


<div id="map" style="width:400px; height:400px"></div>

<form  method="post" name="myform" action="">

<input type="text" name="cle"><br>
</form>


<?php
$cle = "'%".$_POST['cle']."%'";




$connect = mysqli_connect('192.168.1.20','dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
mysqli_set_charset($connect,"utf8");


$sql= "SELECT id,NomEtude,Latitude,Longitude FROM Cas WHERE NomEtude LIKE $cle";

$result = mysqli_query($connect, $sql);

$json_array = array();

while ($row = mysqli_fetch_assoc($result)){
    
    echo '<pre>';
    print_r($json_array);
    echo '</pre>';



    $json_array[] = $row;
    
}

// echo json_encode($json_array);

file_put_contents('map.json', json_encode($json_array,true) );





?>
<script>
// var lat ="<?php echo $lat ?>";
// var long ="<?php echo $long ?>";
// var map = L.map('map').setView([lat , long], 11);
// var marker = L.marker([lat, long]).addTo(map);

var map = L.map('map').setview([40,3],11);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


// L.marker([51.5, -0.09]).addTo(map)
//     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
//     .openPopup();
</script>