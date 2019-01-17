<?php

// include_once 'tools.php';

class connectionDb
{
	public $db;
	private $hostname= '192.168.1.20';
	private $dbname='dcl.dartagnan';
	private $dbuser='dcl.dartagnan';
	private $dbpassword='dcl.dartagnan';

	public function __construct($dbHost, $dbName, $dbUser, $dbPass){
		$this->db = NULL;
		$this->hostname = $dbHost;
		$this->dbname = $dbName;
		$this->dbuser = $dbUser;
		$this->dbpassword = $dbPass;
		$this->connectDb();
		return $this->db;
	}

	public function connectDb()
	{
		try{
			$db = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->dbname, $this->dbuser, $this->dbpassword);
			if (!empty($db))
			{
				$this->db = $db;
			}
		}
		catch (Exception $e) {
			die ('Erreur : ' . $e->getMessage());
		}
		return $this->db;
    }
}

$try= new connectDb();
var_dump($try);
// $dbConnectionArray = array('192.168.1.20', 'dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');

?>