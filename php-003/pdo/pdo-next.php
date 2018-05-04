<?php
error_reporting( E_ALL );
ini_set('display_errors', '1');

try {
    $cnn = new PDO('mysql:host=localhost;dbname=bandymas', 'bandymas', 'IsmokKodint333'); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->query("select aut_gamintojas as g, aut_modelis as m, aut_metai as mm, aut_kaina as k  from aut order by aut_kaina");

    while ($row = $res->fetch()) {
        echo $row['g'] . ' ' . $row['m'] . ' ' . $row['mm'] . ' ' . $row['k'] . '<br>';
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}
