<?php

$srv = "localhost";
$sch = "bandymas";
$usr = "bandymas";
$psw = "labas";

$id = 2;
try {
    $cnn = new PDO("mysql:host={$srv};dbname={$sch}", $usr, $psw); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* blogai, nors veikia
    $res = $cnn->query("select * from aut where aut_id=" . $id);
    if ($row = $res->fetch()){
        var_dump($row);
    }
    */
    /* ok, su asociatyviniu parametru masyvu
    $res = $cnn->prepare("select * from aut where aut_id=:id");
    $res->execute([
        ':id' => $id
    ]);
    if ($row = $res->fetch()){
        var_dump($row);
    }
    */
    // native formatas parametrams, pozicinis
    $res = $cnn->prepare("select * from aut where aut_id=?");
    $res->execute([$id]);
    if ($row = $res->fetch()){
        var_dump($row);
    }
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}

