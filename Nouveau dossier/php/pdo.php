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
