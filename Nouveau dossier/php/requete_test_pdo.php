<?php
try
{
  $bdd = new PDO('mysql:host=192.168.1.20;dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
 
 
class MotCle
{
 
   private $NomEtude;//l'attribut 
   private $NomEtude_ok;//reponse si il est dans la base
   private $serveur;//ici tous les éléments pour la connextion bdd
   private $req_Champ_MotCle;//requete du champs MotCle
    
   //retourne le MotCle a chercher
   public function __construct($NomEtude,$bdd)
   {
    $this->NomEtude=$NomEtude;//dès que l'objet est crée on met la variable dans $NomEtude
    $this->req_champ_MotCle= $bdd->query('SELECT NomEtude FROM `Cas` WHERE NumEtude = 2012');
    // $this->req_Champ_MotCle=$reponse; 
   
   
     
   }
     // Retourne le MotCle recherché
    public function getMotCle()
   {
        return $this->NomEtude;
   }
}
 
// while ($donnees = $reponse->fetch())
// {

//  echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
//  echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';



// }

   
$resultat=new MotCle('2012',$bdd);
var_dump($resultat);