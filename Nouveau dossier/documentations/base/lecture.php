<?php

try {
    // $base = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
    $bdd = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  }
 
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

$fichier = 'Export_etudedecas_convertit.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

// foreach($csv as $ligne){
//     print_r($ligne);
//     echo '<br><br><br>';
//     // echo '|'.implode('|', $ligne).'|';
//     $rqt = "INSERT INTO cas(NumEtude,NomEtude,Latitude,Longitude,DateObservationEtude,ResumeWeb,Doc_Associe,ResumeLong,DonneesTable2_Doc,Nomclassification,DateModification) VALUES ('$ligne[0]','$ligne[1]','$ligne[2]','$ligne[3]','$ligne[4]','$ligne[8]','$ligne[9]','$ligne[10]','$ligne[12]','$ligne[13]','$ligne[14]')";
//     $query = $bdd->prepare($rqt);
//     $query->execute();
//     echo '<br>';
//     var_dump($rqt);
// }

foreach($csv as $ligne){

    // pour enlever la contrainte de clé étrangère
    // $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    // $requete_pdo->execute();

    $NomEtude = addslashes($ligne[1]);
    $ResumeWeb = addslashes($ligne[8]);
    $ResumeLong = addslashes($ligne[10]);
    
    echo '</br>';
    print_r ($ligne);
    
    // $rqt = "INSERT INTO cas(id_cas,NumEtude,NomEtude,Latitude,Longitude,DateObservationEtude,ResumeWeb,ResumeLong,Nomclassification,DateModification) VALUES ('','$ligne[0]','$ligne[1]','$ligne[2]','$ligne[3]','$ligne[4]','$ligne[8]','$ligne[10]','$ligne[13]','$ligne[14]')";
    $rqt ="INSERT INTO Cas(id,NumEtude,NomEtude,Latitude,Longitude,DateObservationEtude,ResumeWeb,ResumeLong,Nomclassification,DateModification) VALUES ('', '$ligne[0]','$NomEtude', '$ligne[2]', '$ligne[3]', '$ligne[4]', '$ResumeWeb', '$ResumeLong', '$ligne[13]','$ligne[14]')";
    echo '</br></br></br>echo rqt apres addslashes : </br>';
    var_dump($rqt);
    $query = $bdd->prepare($rqt);
    $query->execute();
    echo '</br>';
    echo '----------------------------------------------------------------';
    // var_dump($rqt);

        
    // pour remettre la contrainte de clé etrangère
    // $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=1");
    // $requete_pdo->execute(); 
  
}
