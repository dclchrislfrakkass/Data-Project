<?
// Paramètres définis pour le test
$host = "192.168.";
$base = "dcl.dartagnan";
$login = "dcl.dartagnan";
$pass = "dcl.dartagnan";


function sql_connect($host, $login, $pass)
{
	$link_sql = mysql_connect($host, $login, $pass)
		or die("Impossible de se connecter : " . mysql_error());
	echo 'Connexion réussie';
	
	return $link_sql;
}

function sql_select_base($base, $link_sql)
{
	$db_selected = mysql_select_db($base, $link_sql);
	if (!$db_selected) {
   		die ('Impossible de sélectionner la base de données : ' . mysql_error());
		return false;
	}
	return true;
}

// Renvoie qui connecte et selectionne la base
function sql_connect_select($host, $login, $pass, $base)
{
	if (!sql_select_base($base, $sql_link = sql_connect($host, $login, $pass))) {
		return false;
	}
	return $sql_link;
}

var_dump($link_sql);

?>


<!--
// Fonction qui teste l'existance d'une ou plusieurs valeurs dans la bdd
function sql_req_exist($query, $link_sql)
{
	// Si le nombre de lignes renvoy�es est 0 alors entr�es non existantes
	if(mysql_num_rows(mysql_query($query, $link_sql)) == 0)
	{	
		echo ("Donn�e(s) introuvable(s) dans la base");
		return false;
	}
	return true;
}

// Fonction qui retourne les donn�es de r�sultat de la requete
function sql_req_data($query, $link_sql)
{
	$result = mysql_query($query, $link_sql);
	if(!$result)
	{	
		echo ("Donn�e(s) introuvable(s) dans la base");
		return false;
	}
	
	$nb_lines = mysql_num_rows($result);

	$tab_res = array($nb_lines);
	$i = 0;
	while ($res = mysql_fetch_array($result))
	{
		$tab_res[$i] = $res;
		$i++;
	}

	return $tab_res;
}

?>