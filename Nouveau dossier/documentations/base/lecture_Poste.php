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
$fichier = 'laposte_hexasmal.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');

foreach($csv as $ligne){
    print_r($ligne);
    echo '<br><br><br>';

    $Nom_commune = addslashes($ligne[1]);
    $lCo = addslashes($ligne[3]);
    $lCom = addslashes($ligne[4]);

    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();

    // echo '|'.implode('|', $ligne).'|';

    $rqt = "INSERT INTO laPoste(Code_commune_INSEE,Nom_commune,Code_postal,Libelle_acheminement,ligne_5,coordonnees_gps) VALUES ('$ligne[0]','$Nom_commune','$ligne[2]','$lco','$lCom','$ligne[5]')";
    $query = $bdd->prepare($rqt);
    $query->execute();
    echo '<br>';
    var_dump($rqt);

}
