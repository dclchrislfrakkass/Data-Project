<?php

try {
    // $base = new PDO('mysql:host=127.0.0.1; dbname=dcl.dartagnan', 'root', '');                           //base localhost
    $bdd = new PDO('mysql:host=51.254.203.143; dbname=dcldartagnan', 'dclovni', 'bMulndojQdyo0jmY9', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));    //serveur
    // $bdd = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));     //serveur NAS
  }
 
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

$fichier = 'baselight.csv';   //le fichier à charger

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');



foreach($csv as $ligne){

    // pour enlever la contrainte de clé étrangère
    // $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    // $requete_pdo->execute();
    $ResumeWeb = addslashes($ligne[8]);
    $ResumeLong = addslashes($ligne[10]);
    echo '</br>';
    
    print_r ($ligne);
    echo '</br></br></br>';
    $rqt ="INSERT INTO cas(id_cas,NumEtude,NomEtude,Latitude,Longitude,DateObservationEtude,ResumeWeb,ResumeLong,Nomclassification,DateModification) VALUES ('', '$ligne[0]','$ligne[1]', '$ligne[2]', '$ligne[3]', '$ligne[4]', '$ResumeWeb', '$ResumeLong', '$ligne[13]','$ligne[14]')";

        
    // pour remettre la contrainte de clé etrangère
    // $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=1");
    // $requete_pdo->execute(); 
    echo '</br></br></br>echo rqt apres addslashes : </br>';
    var_dump($rqt);
    $query = $bdd->prepare($rqt);
    $query->execute();
    echo '</br>';
    echo '----------------------------------------------------------------';
  
}
