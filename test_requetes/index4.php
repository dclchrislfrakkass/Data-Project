<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';
?>

<form  method="post" name="myform" action="">

    <p>Par Département: </p>
    <select name="depart" id="dp">
    <?php
        $regions = $bd->prepare("SELECT * FROM Departement GROUP BY NomDuDepartement");
        $regions->execute(array());
        $departements = $regions->fetchAll();
        foreach($departements as $departement) {?>
        <option value="<?php echo $departement['id_departement'];?>" name="depSel"><?php echo $departement['NomDuDepartement'];?></option>
        <?php 
        } 
        ?>
    </select><br>
    <input type="submit" value="Submit" >
</form>

<?php

$depSel = $_POST['depSel'];

var_dump($depSel);
if (empty($depSel)) {
    $stmt3 = $bd->prepare("SELECT * FROM Cas AS Cas, Departement AS Departement WHERE Cas.id = Departement.id_departement AND NomDuDepartement LIKE $depSel");
    $stmt3->execute(array($depSel));
    $resultats3 = $stmt3->fetchAll();

    foreach ($resultats3 as $resultat3) {
        var_dump('<b>Nom du cas: </b>'.$resultat3['NomEtude'].'<b> Departement: </b>'.$resultat3['NomDuDepartement']);
        echo '<br>';
    }
}
