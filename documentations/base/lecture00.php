<?php

try {
    // $base = new PDO('mysql:host=127.0.0.1; dbname=dcl.dartagnan', 'root', '');
   $bdd = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
    
  }
 
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }


$fichier = 'baselight.csv';


$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

foreach($csv as $ligne){
    
    $NumEtude = addslashes($ligne[1]);
    $NomEtude = addslashes($ligne[2]);
    $Latitude = addslashes($ligne[3]);
    $Longitude = addslashes($ligne[4]);
    $DateObservationEtude = addslashes($ligne[5]);
    $ResumeWeb = addslashes($ligne[8]);
    $ResumeLong = addslashes($ligne[10]);
    $Nomclassification = addslashes($ligne[13]);
    $DateModification = addslashes($ligne[14]);
  
    echo '</br>';
    // print_r ($ligne);
    echo '</br></br></br>';
    // var_dump($ResumeLong);
    echo '</br>';
    echo '</br>';
    $rqt ="INSERT INTO cas(id_cas,NumEtude,NomEtude,Latitude,Longitude,DateObservationEtude,ResumeWeb,ResumeLong,Nomclassification,DateModification) VALUES ('', '','', '', '', '', '$ResumeWeb', '$ResumeLong', '','')";
    // $rqt ="INSERT INTO cas(id_cas,NumEtude,NomEtude,Latitude,Longitude,DateObservationEtude,ResumeWeb,ResumeLong,Nomclassification,DateModification) VALUES ('',$NumEtude,$NomEtude,$Latitude,$Longitude,$DateObservationEtude,$ResumeWeb,$ResumeLong,$Nomclassification,$DateModification)";
    echo '</br></br></br>echo rqt apres addslashes : </br>';
    var_dump($rqt);

  //   $str = $rqt;       // Ta chaine à analyser
  //   $tec = array("'","[","]");                           // Ton array contenant les mots clés.
  //   foreach ($tec as $str) {
  //     if (strpos($str, $data[3])) {
  //         echo $str;
  //     }
  // } 

        // for($i=0;$i<count($tec);$i++)                              // On parcourt le tableau
        // {
        //     if(preg_match("# ".$tec[$i]." #",$string))             // On recherche si le mot est contenu dans la chaîne
        //     {
        //         echo $string." possède le mot clé : ".$tec[$i];          // si c'est le cas on affiche la chaîne + le mot clé trouvé.
        //     }
        // }

    $query = $bdd->prepare($rqt);
    $query->execute();
    echo '</br></br>requete apres prepare</br></br>';
    var_dump($rqt);
    echo '</br></br></br>';
    echo '</br>';
    echo '----------------------------------------------------------------';
        // var_dump($rqt);
  
}

// $rqtVille ="INSERT INTO ville(id_ville,NumEtude) VALUES ('','666')";
// $query = $bdd->prepare($rqtVille);
// $query->execute();
// var_dump($rqtVille);



// foreach ([0] AS $ligne) {
//     $query->bindParam([''], $ligne);
//     $query->execute();
// };