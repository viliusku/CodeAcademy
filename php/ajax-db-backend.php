<?php
$post = json_decode(file_get_contents('php://input'));

$result = [];

$cnn = new PDO('mysql:host=test.lt;dbname=test', 'test', 'test');

if ($post->pasirinkimas == 'ja') $sql = "select asm_vardas, asm_pavarde, asm_gdata from asmenys order by asm_gdata desc limit 0,3";
elseif ($post->pasirinkimas == 'vy') $sql = "select asm_vardas, asm_pavarde, asm_gdata from asmenys order by asm_gdata asc limit 0,3";
else $sql = "select asm_vardas, asm_pavarde, asm_gdata from asmenys order by asm_gdata";

$res = $cnn->query($sql);


while ($row=$res->fetch()){
    $result[] = "{$row['asm_vardas']} {$row['asm_pavarde']}, {$row['asm_gdata']} {$post->pasirinkimas}";
}

$res->closeCursor();

echo json_encode($result);