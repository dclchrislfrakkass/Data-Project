<?php

echo '<br/>';
$depSearch = $departement['NomDuDepartement'];
$dpsearch = $bd->prepare("SELECT * 
FROM Cas AS Cas, Departement AS Departement 
WHERE Cas.id = Departement.id_departement");
$depsearch = $dpsearch->fetchAll();

foreach($depsearch as $rrr) {
    var_dump('<b>Nom du cas : </b>'.$rrr['NomEtude'].'<b> Observation : </b>'.$rrr['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}

// isset(motCle){
// $motCle = $_POST['motCle'];
$cle = "'%".$_POST['cle']."%'";

$stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");
// $stmt= $bd->prepare("SELECT * FROM Cas WHERE NumEtude= $motCle");
// $stmt->execute(array($motCle));
$stmt->execute(array($cle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}
// var_dump($stmt);

$sdate1 = $_POST['date1'];
$sdate2 = $_POST['date2'];

$stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
$stmt2->execute(array());

$resultats2 = $stmt2->fetchAll();

foreach($resultats2 as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}