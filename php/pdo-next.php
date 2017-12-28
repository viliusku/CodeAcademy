<?php

$cnn = new PDO('mysql:host=test.lt;dbname=test', 'test', 'test');

$kaina = 3000;

// taikinys nulauzimui istatant specialu teksta vietoje $kaina
$res = $cnn->query("select aut_gamintojas from auto where aut_kaina>{$kaina}");
while ($a = $res->fetch()){
    echo $a['aut_gamintojas'] . '<br>';
}

// su apsauga nuo nulauzimo

$res = $cnn->prepare("select aut_gamintojas from auto where aut_kaina>:kaina");

$x = $res->execute([':kaina' => $kaina]);
while ($a = $res->fetch()){
    echo $a['aut_gamintojas'] . '<br>';
}