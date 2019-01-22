<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
// Connexion à la BDD
require 'pdo.php';

?>
<!-- Formulaire de rechercher -->
<form  method="post" name="myform" action="">
    <input type="text" name="cle"><br>
    <label for="date1">Par date du: </label>
    <input type="number" name="date1">
    <label for="date2">Au: </label>
    <input type="number" name="date2"><br>
    <p>Par Département: </p>
    <select name="depart" id="dp" onchange="select()">
    <?php
        $regions = $bd->prepare("SELECT * FROM Departement GROUP BY NomDuDepartement");
        $regions->execute(array());
        $departements = $regions->fetchAll();
        foreach($departements as $departement) {?>
        <option value="<?php echo $departement['NomDuDepartement'];?>" name="depSel"><?php echo $departement['NomDuDepartement'];?></option>
        <?php 
        } 
        ?>
    </select><br><br>
    <input type="submit" name="Submit" value="Submit" >
</form>


<?php
// Requête pour les différentes recherches
if(isset($_POST['Submit'])){
    $cle = $_POST['cle'];
    $sdate1 = $_POST['date1'];
    $sdate2 = $_POST['date2'];
    $depSel = $_POST['depart'];
    if(!empty($cle)){
        $stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE '%".$_POST['cle']."%'");
        $stmt->execute(array($_POST['cle']));
        $resultats = $stmt->fetchAll();
        foreach($resultats as $resultat) {
            var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
            echo '<br><br/>';
        } 
    } else ;

    if(!empty($sdate1) && !empty($sdate2)){
        $stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
        $stmt2->execute(array());
        $resultats2 = $stmt2->fetchAll();
        foreach($resultats2 as $resultat) {
            var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
            echo '<br><br/>';
        }
    } else ;

    if(!empty($depSel)) {
        $stmt3 = $bd->prepare("SELECT * FROM Cas AS Cas, Departement AS Departement WHERE Cas.id = Departement.id_departement AND NomDuDepartement LIKE '%".$depSel."%'");
        $stmt3->execute(array());
        $resultats3 = $stmt3->fetchAll();
    
        foreach ($resultats3 as $resultat3) {
            var_dump('<b>Nom du cas: </b>'.$resultat3['NomEtude'].'<b> Departement: </b>'.$resultat3['NomDuDepartement']);
            echo '<br>';
        }
    } else ;

} else {
    echo 'merci de faire une recherche';
}