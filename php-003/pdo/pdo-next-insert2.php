<?php
error_reporting( E_ALL );
ini_set('display_errors', '1');

try {
    $cnn = new PDO('mysql:host=localhost;dbname=bandymas', 'bandymas', 'IsmokKodint333'); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->prepare("insert into aut (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) values(:gam, :mod, :met, :kaina)");
    $res = $res->execute([':gam' => 'Skoda', ':mod' => 'Octavia', ':met' => '2010-01-01', ':kaina' => 5000]);
    echo 'ok';
}
catch(PDOException $e) {
    echo $e->getMessage();
}
