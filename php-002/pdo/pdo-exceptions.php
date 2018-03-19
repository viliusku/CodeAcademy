<?php

try {
    $cnn = new PDO('mysql:host=localhost;dbname=mokymai', 'root'); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->query("select asm_vardas from asmuo");
    while ($a = $res->fetch()) {
        echo $a['asm_vardas'] . '<br>';
    }

}
catch(PDOException $e) {
    echo $e->getMessage();
}

/*
try {
    $a = 5 / 0;
}
catch(Exception $e) {
    echo $e->getMessage();
}
*/