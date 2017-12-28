<?php

try {
    $cnn = new PDO('mysql:host=test.lt;dbname=test', 'test', 'test');

    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->query("select aut_gamintojas from auto");
    while ($a = $res->fetch()) {
        echo $a['aut_gamintojas'] . '<br>';
    }
}
catch(PDOException $err) {
    echo $err->getMessage();
}