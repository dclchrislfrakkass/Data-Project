


<?php

$motCle = 1987;

$stmt= $bd->prepare("SELECT * FROM Cas WHERE NumEtude= $motCle");
$stmt->execute(array($motCle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}

// $stmt = $requete->fetchALl(){
//     $motCle = $row['']
// }