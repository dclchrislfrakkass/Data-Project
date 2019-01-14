<?php

try {
    // $base = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=dcl.dartagnan', 'test', 'test0');
  }
 
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }


$fichier = 'baselight.csv';


$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

foreach($csv as $ligne){
    print_r($ligne);
    echo '</br></br>';
  
}

// foreach($ligne){

// }


// $rqt = "INSERT INTO cas(NumEtude,NomEtude,Nomclassification,Longitude,Latitude,DateObservationEtude,ResumeWeb,Doc_Associe,ResumeLong,DonneesTable2_Doc,DateModification)";
// $rqt = " VALUES ";
// $rqt = "(:id_cas,:NumEtude,:NomEtude,:Nomclassification,:Longitude,:Latitude,:DateObservationEtude,:ResumeWeb,:Doc_Associe,:ResumeLong,:DonneesTable2_Doc,:DateModification)";
// $stmt = $connexion->prepare($rqt);

// foreach ($tableau As $ligne) {

//     foreach ($ligne as $key=>$value) {
//         if ($key == '0'){
//             $stmt->bindParam('0',$value);
//         }
//     }
// }
// $stmt->execute();

$rqt = "INSERT INTO cas(NumEtude) VALUES (:0)";
$query = $bdd->prepare($rqt);

foreach ([0] AS $ligne) {
    $query->bindParam('0', $ligne);
    $query->execute();
}