<?php

$fichier = 'baselight.csv';

// echo mb_detect_encoding(file_get_contents($_FILES['fichier']['tmp_name']));
// $content = file_get_contents($_FILES['fichier']['tmp_name']);
// if ('UTF-8' !== mb_detect_encoding($content, 'UTF-8', TRUE)) {
//     $content = mb_convert_encoding($content, 'UTF-8', 'CP1252');
// }

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

foreach($csv as $ligne){
    print_r($ligne);
    echo '</br></br>';
    // echo '|'.implode('|', $ligne).'|';
}