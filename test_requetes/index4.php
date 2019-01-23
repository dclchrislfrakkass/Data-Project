<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';
?>

<form  method="post" name="myform" action="">
    <?php 
        $NClass = $_POST['']
        $NomClass = $bd->prepare("SELECT * FROM Cas WHERE NomClassification LIKE '%".$NClass."%'");
        $NomClass->execute(array());
        $NomClassifications = $NomClass->fetchAll();
        foreach($NomClassifications as $NomClassification) {
            var_dump('<b>Nom du cas : </b>'.$NomClassification['NomEtude'].'<b> Observation : </b>'.$NomClassification['NomClassification']);
            echo '<br><br/>';
        } 
    ?>
    <input type="checkbox" value="" name="">tous
    <input type="checkbox" value="" name="">A
    <input type="checkbox" value="" name="">B
    <input type="checkbox" value="" name="">C
    <input type="checkbox" value="" name="">D
    <input type="checkbox" value="" name="">D1
    <input type="checkbox" value="" name="">D2<br><br>
    <input type="submit" value="Submit" name="envoyer">
</form>


<?php

// echo 'j\'en ai marre !!!';
if (isset($_POST['envoyer'])){
   
    $depSel = $_POST['depart'];

    if(!empty($depSel)) {
        echo 'j\'en ai marre !!!';
        $stmt3 = $bd->prepare("SELECT * FROM Cas AS Cas, Departement AS Departement WHERE Cas.id = Departement.id_departement AND NomDuDepartement LIKE '%".$depSel."%'");
        $stmt3->execute(array());
        $resultats3 = $stmt3->fetchAll();

        echo $depSel;
        
        foreach ($resultats3 as $resultat3) {
            var_dump('<b>Nom du cas: </b>'.$resultat3['NomEtude'].'<b> Departement: </b>'.$resultat3['NomDuDepartement']);
            echo '<br>';
        }
    }
}