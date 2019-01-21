
<form  method="post" name="myform" action="">
<input type="text" name="motCle" maxlength="80" size="30"> 
<input type="text" name="cle"><br>

</form>
    

<?php
require 'pdo.php';
    




$cle = "'%".$_POST['cle']."%'";
    
$stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle FOR JSON AUTO");
$stmt->execute(array($cle));
    
$resultats = $stmt->fetchAll();
    
foreach($resultats as $resultat) {
    $lat = $resultat['Latitude'];
    $long = $resultat['Longitude'];
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb'].'<b> latitude : </b>'.$resultat['Latitude']. '<b>longitude : </b>'.$resultat['Longitude']);
    echo '<br/>';