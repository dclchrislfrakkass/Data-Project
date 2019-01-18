<?php
// Connexion à la BDD
try {
    // $base = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
    $bdd = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  }
 
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

// Lecture du fichier CSV
$fichier = 'Export_etudedecas_convertit.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

foreach($csv as $ligne){
    print_r($ligne);
    echo '<br><br><br>';

    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();

    // echo '|'.implode('|', $ligne).'|';

    $rqt = "INSERT INTO Ville(id_ville,NomEtude) VALUES ('','$ligne[1]')";
    $query = $bdd->prepare($rqt);
    $query->execute();
    echo '<br>';
    var_dump($rqt);

    // pour remettre la contrainte de clé etrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=1");
    $requete_pdo->execute(); 
}