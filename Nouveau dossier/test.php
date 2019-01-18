<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>L'ovni Tender, l'ovni True</title>
</head>


<?php
require 'php/pdo.php';
?>

<form method="POST">
<input type="text" id="cLe" name="cle">
<input type="button" id="" name="submit" value="Rechercher !">

</form>





<?php

// if (isset($_GET['motCle'])){

    $cle = (isset($_POST['cle']) ? $_POST['cle'] : '');

    $rep = $bdd->query("SELECT * FROM Cas WHERE NumEtude = '$cle'");
    
    // // On affiche chaque entrée une à une
    while ($donnees = $rep->fetch())
    {
     echo '</br>Résultats avec comme requête : </br></br>';
     echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
     echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';
     echo 'Resume de l observation : '.$donnees['ResumeWeb']. '</br>';
    }
// }

// $rep = $bdd->query('SELECT * FROM `Cas` WHERE NumEtude = 2012');

