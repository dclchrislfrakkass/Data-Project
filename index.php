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
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=192.168.1.20;dbname=dcl.dartagnan;charset=utf8', 'dcl.dartagnan', 'dcl.dartagnan');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM Cas');

// // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

 echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
 echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';



}

$reponse->closeCursor(); // Termine le traitement de la requête

?>


<?php

// try {
    // $db = new PDO('mysql:host=192.168.1.20;dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }
    // catch(exeption $e) {
    //     die('Erreur '.$e->getMessage());
    // }

//     var_dump($db);

// require 'php/class_form.php';
// require 'php/pdo_2.php';

// $form = new Form();
// echo '<h3>rechercher un cas: </h3>';
// echo $form->input('');
// echo ' par date : ';
// echo $form->date('date');
// echo 'par type de rencontre';
// echo $form->type('');
// echo $form->input('region');
// echo $form->input('ville');
// echo $form->radio('');

// echo $form->submit();



// $request = $db->query('SELECT NomEtude FROM Cas');
// // $donnees = $cas->fetch();
// while ($cas = $request->fetch(PDO::FETCH_ASSOC))
// echo $cas;

// var_dump($bdd);

// $reponse = $bdd->query('SELECT NomEtude FROM Cas');

// echo $reponse;
