<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="form.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"> 
</head>

<?php
// Connexion à la BDD
require 'pdo.php';

?>
<div class="formulaire">
    <h2 class="titreForm">Rechercher un cas</h2>
    <!-- Formulaire de rechercher -->
    <form class="form" method="post" name="myform" action="">
        <div class="motCle">
            <label for="cle">Par mot clé : </label>
            <input class="cle" type="text" name="cle">
        </div>
        <div class="date">
            <label for="date1">Entre l'année</label>
            <input type="number" class="date1" name="date1">
            <label for="date2">et l'année</label>
            <input type="number" class="date2" name="date2">
        </div>
        <div class="departement">
            <label for="depart">Par département</label>
            <select class="depart" name="depart" id="dp" onchange="select()">
            <?php
                $regions = $bd->prepare("SELECT * FROM Departement GROUP BY NomDuDepartement");
                $regions->execute(array());
                $departements = $regions->fetchAll();
                foreach($departements as $departement) {?>
                <option value="<?php echo $departement['NomDuDepartement'];?>" name="depSel"><?php echo $departement['NomDuDepartement'];?></option>
                <?php 
                } 
                ?>
            </select>
        </div>
        <div class="btnSub">
            <input type="submit" class="submit" name="Submit" value="Recherche" >
        </div>
    </form>
</div>

