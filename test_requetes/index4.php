<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';
?>

<form  method="post" name="myform" action="">

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