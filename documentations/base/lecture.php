<?php

$fichier = 'Export_etudedecas.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

foreach($csv as $ligne){
    print_r($ligne);
    echo '|'.implode('|', $ligne).'|';
}