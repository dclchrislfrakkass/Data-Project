


<?php

$motCle = 1987;

$stmt= $bd->prepare("SELECT * FROM Cas WHERE NumEtude= $motCle");
$stmt->execute(array($motCle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}

// $stmt = $requete->fetchALl(){
//     $motCle = $row['']
// }

$regions = $bd->prepare("SELECT * FROM Departement");
$regions->execute(array());

foreach($regions as $region) {
    ?>
    <option value="<?php $region['id'];?>"><?php $region['NomDuDepartement'];?></option>
    <?php
}

// $cle = $_POST['cle'];

// $stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE '%".$cle."%'");
// $stmt->execute(array($cle));

// $resultats = $stmt->fetchAll();


// $sdate1 = $_POST['date1'];
// $sdate2 = $_POST['date2'];

// $stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
// $stmt2->execute(array());

// $resultats2 = $stmt2->fetchAll();

// foreach($resultats2 as $resultat2) {
//     var_dump('<b>Nom du cas : </b>'.$resultat2['NomEtude'].'<b> Observation : </b>'.$resultat2['ResumeWeb']);
//     echo '<br />';
//     echo '<br />';
// }

// // echo 'j\'en ai marre !!!';
// if (isset($_POST['envoyer'])){
   
//     $depSel = $_POST['depart'];

//     if(!empty($depSel)) {
//         $stmt3 = $bd->prepare("SELECT * FROM Cas AS Cas, Departement AS Departement WHERE Cas.id = Departement.id_departement AND NomDuDepartement LIKE '%".$depSel."%'");
//         $stmt3->execute(array());
//         $resultats3 = $stmt3->fetchAll();

//         echo $depSel;
        
//         foreach ($resultats3 as $resultat3) {
//             var_dump('<b>Nom du cas: </b>'.$resultat3['NomEtude'].'<b> Departement: </b>'.$resultat3['NomDuDepartement']);
//             echo '<br>';
//         }
//     }
// }