<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';
// require 'requete.php';
require 'test.php';

?>
<input type="text" value="1978">
<p></p>

<script>
$("input")
.keyup(function() {
    var value = $ (this).val();
    $("p").text(value);
    
console.log(value);

})
.keyup();
</script>



<?php

$motCle = $value;

$stmt= $bd->prepare("SELECT * FROM Cas WHERE NumEtude= $motCle");
$stmt->execute(array($motCle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}

var_dump($stmt);
