<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

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



$sdate1 = $_POST['date1'];
var_dump($sdate1);
$sdate2 = $_POST['date2'];
var_dump($sdate2);

$stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
$stmt2->execute(array());
var_dump($stmt2);

$resultats2 = $stmt2->fetchAll();

foreach($resultats2 as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
};