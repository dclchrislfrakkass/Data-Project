<?php
  try {
    $base = new PDO('mysql:host=192.168.1.20; dbname=dcl.dartagnan', 'dcl.dartagnan', 'dcl.dartagnan');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
?>

