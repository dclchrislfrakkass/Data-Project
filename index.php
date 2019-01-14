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


require 'php/class_form.php';


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


