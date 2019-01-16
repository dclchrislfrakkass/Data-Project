<?php

class connectionBdd
{
	public $bdd;
	private $hostname;
	private $dbname;
	private $dbuser;
	private $dbpassword;

	public function __construct($dbHost, $dbName, $dbUser, $dbPass){
		$this->bdd = NULL;
		$this->hostname = $dbHost;
		$this->dbname = $dbName;
		$this->dbuser = $dbUser;
		$this->dbpassword = $dbPass;
		$this->connectBdd();
		return $this->bdd;
	}

	public function connectBdd()
	{
		$contenu_fichier_json = file_get_contents('infos.json');
		/* recupération en tableau (true) */
		$bddInfos = json_decode($contenu_fichier_json, true);
		try{
			$bdd = new PDO('mysql:host=' . $bddInfos['hostname'] . ';dbname=' . $bddInfos['dbname'], $bddInfos['dbuser'], $bddInfos['dbpassword']);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$bdd->exec("SET NAMES utf8");
			if (!empty($bdd))
			{
				$this->bdd = $bdd;
				
			}
		}
		catch (Exception $e) {
			die ('Erreur : ' . $e->getMessage());
		}
		return $this->bdd;
		
		
	}

	// $connectBdd = new connectBdd();
	// var_dump($bdd);
}
echo 'test';
return $bdd;