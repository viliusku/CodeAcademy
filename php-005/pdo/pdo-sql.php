<?php

$srv = "localhost";
$sch = "bandymas";
$usr = "bandymas";
$psw = "labas";

$id = 2;
try {
    $cnn = new PDO("mysql:host={$srv};dbname={$sch}", $usr, $psw); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*
    $sql = "insert into aut (aut_gam, aut_mod, aut_met, aut_kai) values(:gam, :mod, :met, :kai)";
    $res = $cnn->prepare($sql);
    $res->execute([
        ':gam' => 'Moskwitch',
        ':mod' => '412',
        ':met' => '1970',
        'kai' => 12000
    ]);
    $res->execute([
        ':gam' => 'Volga',
        ':mod' => 'Gaz21',
        ':met' => '1960',
        'kai' => 15000
    ]);
    */
    $sql = "update aut set aut_kai=:kaina where aut_id=:id";
    $res = $cnn->prepare($sql);
    $res->execute([
        ':kaina' => 3500,
        ':id' => 5
    ]);

    $sql = "delete from aut where aut_id=:id";
    $res = $cnn->prepare($sql);
    $res->execute([
        ':id' => 3
    ]);



}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}
echo 'ok';

