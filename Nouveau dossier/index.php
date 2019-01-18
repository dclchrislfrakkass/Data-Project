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

<form>
<input type="text" id="motCLe" name="MotCle">
<input type="button" id="" name="submit" value="Rechercher !">

</form>





<?php

$rep = $bdd->query('SELECT * FROM `Cas` WHERE NumEtude = 2012');

// // On affiche chaque entrée une à une
while ($donnees = $rep->fetch())
{
 echo '</br>Résultats avec comme requête : 2012 </br></br>';
 echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
 echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';
 echo 'Resume de l observation : '.$donnees['ResumeWeb']. '</br>';


 ?>

<!---

// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM Cas');

// // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

 echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
 echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';



}

$reponse->closeCursor(); // Termine le traitement de la requête

$rep = $bdd->query('SELECT * FROM `Cas` WHERE NumEtude = 2012');

// // On affiche chaque entrée une à une
while ($donnees = $rep->fetch())
{
 echo '</br>Résultats avec comme requête : 2012 </br></br>';
 echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
 echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';
 echo 'Resume de l observation : '.$donnees['ResumeWeb']. '</br>';



}

$reponse->closeCursor();

require 'php/class_form.php';
// require 'php/pdo_2.php';

$form = new Form();
echo '<h3>rechercher un cas: </h3>';
echo $form->input('');
echo ' par date : ';
echo $form->date('date');
echo 'par type de rencontre';
echo $form->type('');
echo $form->input('region');
echo $form->input('ville');
echo $form->radio('');

echo $form->submit();