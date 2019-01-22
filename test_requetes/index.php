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
