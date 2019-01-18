<?php


try{
    $requete = $bd->query("SELECT * FROM cas WHERE NomEtude = 1978");
    $resultats = $requete->fetchAll();
}
catch(Exception $e)
{
    exit('<b>Attention à la ligne '. $e->getLine() .' (code : '. $e->getCode() .') :</b> '. $e->getMessage());
}
foreach($resultats as $resultat) {
    var_dump('<b>Nom du cas : </b>'.$resultat['NomEtude'].'<b> Observation : </b>'.$resultat['ResumeWeb']);
    echo '<br />';
    echo '<br />';
}