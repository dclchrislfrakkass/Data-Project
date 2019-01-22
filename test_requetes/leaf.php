<?php
 $z = array();
$n=0;


echo "DB selected successfully";
$sqlperson= "SELECT * FROM Cas WHERE NomEtude LIKE %bourges%";
$person=  sql_query($db,$sqlperson);       
while( $row =sql_fetch_array($person)){
$y=array(); 

$y[]=$row["fistname"];
$y[]=$row["latitude"];
$y[]=$row["longitude"];   
$z[$n]=$y;
$n++;
}

?>

<html>
<head>
<script type="text/javascript">
//var locations = <?php echo json_encode($a);?>;
var locationsb = <?php echo json_encode($z);?>;
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 6,
center: new google.maps.LatLng(22.00, 96.00),
mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();
var image = '/marker/map.png';
// var image2 = '/marker/Map1.png';

var marker1, n;
for (n = 0; n < locationsb.length; n++) {  
marker1 = new google.maps.Marker({
position: new google.maps.LatLng(locationsb[n][1], locationsb[n][2]),
offset: '0',
icon: image2,
title: locationsb[n][4],
map: map       
});
google.maps.event.addListener(marker1, 'click', (function(marker1, n)
{
return function() {
infowindow.setContent(locationsb[n][0]);
infowindow.open(map, marker1);
}
})(marker1, n));
}

</script> 
<head>
<body id="map"> 
</body>
</html>