<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';
// require 'requete.php';
// require 'test.php';

?>
<!-- script test pour jquery


     <script>
$("input")
.keyup(function() {
    var value = $ (this).val();
    $("p").text(value);
    
console.log(value);

})
.keyup();
</script> -->
<form  method="post" name="myform" action="">
    <!-- <input type="text" name="motCle" maxlength="80" size="30"> -->
    <input type="text" name="cle"><br>
    <label for="date1">Par date du: </label>
    <input type="number" name="date1">
    <label for="date2">Au: </label>
    <input type="number" name="date2"><br>
    <p>Par Département: </p>
    <select name="depart" id="dp">
    <?php
        $regions = $bd->prepare("SELECT * FROM Departement GROUP BY NomDuDepartement");
        $regions->execute(array());
        $departements = $regions->fetchAll();
        foreach($departements as $departement) {?>
        <option value="<?php $departement['id_departement'];?>" name="depSel"><?php echo $departement['NomDuDepartement'];?></option>
        <?php 
        } 
        ?>
    </select><br>
    <input type="submit" value="Submit" >
</form>


<?php

$cle = $_POST['cle'];

$stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE '%".$cle."%'");
$stmt->execute(array($cle));

$resultats = $stmt->fetchAll();


$sdate1 = $_POST['date1'];
$sdate2 = $_POST['date2'];

$stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
$stmt2->execute(array());

$resultats2 = $stmt2->fetchAll();

foreach($resultats2 as $resultat2) {
    var_dump('<b>Nom du cas : </b>'.$resultat2['NomEtude'].'<b> Observation : </b>'.$resultat2['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}

// echo 'j\'en ai marre !!!';
if (isset($_POST['envoyer'])){
   
    $depSel = $_POST['depart'];

    if(!empty($depSel)) {
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