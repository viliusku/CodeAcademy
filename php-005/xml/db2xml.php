<?php

$srv = "localhost";
$sch = "bandymas";
$usr = "bandymas";
$psw = "labas";

$cnn = new PDO("mysql:host={$srv};dbname={$sch}", $usr, $psw); // rysys su db atidaromas
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$s = '<?xml version="1.0" encoding="utf-8"?>';
$s.= '<data>';
try {
    $res = $cnn->prepare("select * from aut order by aut_kai desc");
    $res->execute([]);
    while ($auto = $res->fetch()){
        $s.= '<auto>';
        $s.=  '<gamintojas>' . $auto['aut_gam'] . '</gamintojas>';
        $s.=  '<modelis>' . $auto['aut_mod'] . '</modelis>';
        $s.=  '<metai>' . $auto['aut_met'] . '</metai>';
        $s.=  '<kaina>' . $auto['aut_kai'] . '</kaina>';
        $s.= '</auto>';
    }
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}
$s.= '</data>';
file_put_contents('auto.xml', $s);
echo 'ok';