<?php

// try {
//      $base = new PDO('mysql:host=127.0.0.1; dbname=xxx', 'root', '');                           //base localhost
    //$bdd = new PDO('mysql:host=51.254.203.143; dbname=xxx', 'xxx', 'xxx', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));    //serveur
    // $bdd = new PDO('mysql:host=192.168.1.20; dbname=xxx', 'xxx', 'xxx', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));     //serveur NAS
//   }
 
//   catch(exception $e) {
//     die('Erreur '.$e->getMessage());
//   }


$host = '192.168.1.20';
$db   = 'dcl.dartagnan';
$user = 'dcl.dartagnan';
$pass = 'dcl.dartagnan';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}





// define('DB_HOST', '192.168.1.20');
// define('DB_NAME', 'dcl.dartagnan');
// define('DB_USER', 'dcl.dartagnan');
// define('DB_PASSWORD', 'dcl.dartagnan');
// define('DB_ENCODING', 'utf8');


// $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
// $options = array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
// );
// $cmd = 'SET NAMES ' . DB_ENCODING;
// if( version_compare(PHP_VERSION, '5.3.6', '>') )
// {
//         if( defined('PDO::MYSQL_ATTR_INIT_COMMAND') )
//         $options[PDO::MYSQL_ATTR_INIT_COMMAND] = $cmd ;
//     else
//         $dsn .= ';charset=' . DB_ENCODING;
// }
// $conn = @new PDO($dsn, DB_USER, DB_PASSWORD, $options);
// if( version_compare(PHP_VERSION, '5.3.6', '<') )
// $conn->exec($cmd );







?>

<!----
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
        $this->hote = '192.168.1.20';
        $this->base_de_donnees = 'dcl.dartagnan';
        $this->utilisateur = 'dcl.dartagnan';
        $this->mot_de_passe = 'dcl.dartagnan';

        $dns = $this->moteur . ':dbname=' . $this->base_de_donnees . ";host=" . $this->hote;

        parent::__construct( $dns, $this->utilisateur, $this->mot_de_passe );
        echo $dns;
        // $bdd = "new PDO('". $this->moteur."host=". $this->hote."; dbname=". $this->base_de_donnees ."', '".$this->utilisateur ."', '"$this->mot_de_passe ."');";
        
    }
}

$pdoConf = new PDOConfig('bdd');

echo '</br>test de PDO en private:</br></br>';
var_dump($pdoConf);


