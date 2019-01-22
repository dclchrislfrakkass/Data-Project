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
<div id="mymap" style="width:400px; height:400px"></div>

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
    // These are all PHP variables. The web browser doesn't know about them.

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
    echo $results['NomEtude'].$results['Latitude'].$results['Longitude'];
?>

<script>
    var mymap = L.map('mymap').setView([47.081012, 2.398781999999983], 6);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);

    // $donnees is a PHP var. We dump its JSON representation into a
    // javascript variable definition and initialization for "var data".
    var data = <?php echo JSON_encode($donnees); ?>;

    // Note "var i", not "$i". This is the browser iterating through "data".
    for (var i = 0; i < data.length; i++)
    {
        // Note how "L.marker()" runs only in the browser,
        // well outside of the <?php ?> tags. PHP doesn't know, nor 
        // it cares, about Leaflet.
        L.marker(data[i].lat, data[i].lng).addTo(mymap);

        // Accessing the properties of the data depends on the structure
        // of the data. You might want to do stuff like
        console.log(data);
        // while remembering to use the developer tools (F12) in your browser.
    }

</script>