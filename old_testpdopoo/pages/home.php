<?php

$pdo = new PDO('mysql:host=192.168.1.20;dbname=dcl.dartagnan;charset=utf8', 'dcl.dartagnan', 'dcl.dartagnan');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res = $pdo->query('SELECT * FROM Cas');

$datas = $res->fetchAll(PDO::FETCH_OBJ);

var_dump($datas[0]->NomEtude);


// $pdo->exec('INSERT INTO comments SET id="",pseudo="testChris",comment="test de commentaire"');

