<?php

// try {
//      $base = new PDO('mysql:host=127.0.0.1; dbname=dcl.dartagnan', 'root', '');                           //base localhost
    //$bdd = new PDO('mysql:host=51.254.203.143; dbname=dcldartagnan', 'dclovni', 'bMulndojQdyo0jmY9', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));    //serveur
    // $bdd = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));     //serveur NAS
//   }
 
//   catch(exception $e) {
//     die('Erreur '.$e->getMessage());
//   }




  class PDOConfig extends PDO
{
    private $moteur;
    private $hote;
    private $base_de_donnees;
    private $utilisateur;
    private $mot_de_passe;

    public function __construct()
    {
        $this->moteur = 'mysql';
        $this->hote = '127.0.0.1';
        $this->base_de_donnees = 'dcl.dartagnan';
        $this->utilisateur = 'root';
        $this->mot_de_passe = '';

        $dns = $this->moteur . ':dbname=' . $this->base_de_donnees . ";host=" . $this->hote;

        parent::__construct( $dns, $this->utilisateur, $this->mot_de_passe );
    }
}

$pdoConf = new PDOConfig('bdd');

echo 'test de PDO en private:</br></br>';
var_dump($pdoConf);