
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
            $lat = $resultat['Latitude'];
            $long = $resultat['Longitude'];
            // var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb'].'<b> latitude : </b>'.$resultat['Latitude']. '<b>longitude : </b>'.$resultat['Longitude']);
            echo '<br />';
            echo '<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb'];
            // .'<b> latitude : </b>'.$resultat['Latitude']. '<b>longitude : </b>'.$resultat['Longitude'];

        } 
    } else ;

    if(!empty($sdate1) && !empty($sdate2)){
        $stmt2 = $bd->prepare("SELECT * FROM Cas WHERE NumEtude BETWEEN $sdate1 AND $sdate2");
        $stmt2->execute(array());
        $resultats2 = $stmt2->fetchAll();
        foreach($resultats2 as $resultat) {
            $lat = $resultat['Latitude'];
            $long = $resultat['Longitude'];
            // var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
            echo '<b>Nom du cas : </b>'.$resultat['NomEtude'].'<br>'.'<b> Observation : </b>'.$resultat['ResumeWeb'];
            echo '<br><br/>';
        }
    } else ;

    if(!empty($depSel)) {
        $stmt3 = $bd->prepare("SELECT * FROM Cas AS Cas, Departement AS Departement WHERE Cas.id = Departement.id_departement AND NomDuDepartement LIKE '%".$depSel."%'");
        $stmt3->execute(array());
        $resultats3 = $stmt3->fetchAll();
    
        foreach ($resultats3 as $resultat3) {
            $lat = $resultat['Latitude'];
            $long = $resultat['Longitude'];
            // var_dump('<b>Nom du cas: </b>'.$resultat3['NomEtude'].'<b> Departement: </b>'.$resultat3['NomDuDepartement']);
            echo '<b>Nom du cas: </b>'.$resultat3['NomEtude'].'<br>'.'<b> Departement: </b>'.$resultat3['NomDuDepartement'].'<br>'.'<b> Observation : </b>'.$resultat3['ResumeWeb'];
            echo '<br><br/>';
        }
    } else ;

} else {
    echo 'merci de faire une recherche';
}




?>

<script>
var lat ="<?php echo $lat ?>";
var long ="<?php echo $long ?>";
var map = L.map('map').setView([lat , long], 11);
var marker = L.marker([lat, long]).addTo(map);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// L.marker([51.5, -0.09]).addTo(map)
//     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
//     .openPopup();


</script>
