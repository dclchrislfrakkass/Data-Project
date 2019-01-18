<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';
// require 'requete.php';
// require 'test.php';

?>
<!-- script test pour jquery
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
</script> -->
<form  method="post" name="myform" action="">
    <!-- <input type="text" name="motCle" maxlength="80" size="30"> -->
    <input type="text" name="cle">
    <select name="date">
    <input type="submit" value="Submit" >
</form>


<?php
// isset(motCle){
// $motCle = $_POST['motCle'];
$cle = "'%".$_POST['cle']."%'";

$stmt= $bd->prepare("SELECT * FROM Cas WHERE NomEtude LIKE $cle");
// $stmt= $bd->prepare("SELECT * FROM Cas WHERE NumEtude= $motCle");
// $stmt->execute(array($motCle));
$stmt->execute(array($cle));

$resultats = $stmt->fetchAll();

foreach($resultats as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}


// var_dump($stmt);
