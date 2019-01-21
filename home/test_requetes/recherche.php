<link rel="stylesheet" href="style.css">
<?php
require 'pdo.php';


// isset(motCle){
    // $motCle = $_POST['motCle'];
   
    $cle = "'%".$_POST['cle']."%'";
    
    $stmt= $bd->prepare("SELECT * FROM ufo WHERE NomEtude LIKE $cle");
    // $stmt= $bd->prepare("SELECT * FROM Cas WHERE NumEtude= $motCle");
    // $stmt->execute(array($motCle));
    $stmt->execute(array($cle));
    
    $resultats = $stmt->fetchAll();
    
    foreach($resultats as $resultat) {
        var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
        echo '<br />';
        echo '<br />';
        
        
    }
    echo '----------------------------------------<br/>';
    echo '<br/>';
    echo '--              debug                 --<br/>';
    echo '<br/>';
    echo '----------------------------------------<br/>';
    echo 'is cle set ? ';
    var_dump(isset($cle));
    var_dump(' avec : '.$cle);
    // var_dump($stmt);