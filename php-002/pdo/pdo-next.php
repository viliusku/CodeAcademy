<?php

$cnn = new PDO('mysql:host=localhost;dbname=mokymai', 'root'); // rysys su db atidaromas

$amzius = 25;

// taikinys nulauzimui istatant specialu teksta vietoje $amzius
$res = $cnn->query("select asm_vardas, asm_pavarde from asmuo where asm_amzius>{$amzius}");
// select asm_vardas, asm_pavarde from asmuo where asm_amzius>25
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' . $a['asm_pavarde'] . '<br>';
}

echo '-- antras kartas --<br>';
// su apsauga nuo nulauzimo

$res = $cnn->prepare("select asm_vardas, asm_pavarde from asmuo where asm_amzius>:aaa");

$x = $res->execute([':aaa' => $amzius]);
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' . $a['asm_pavarde'] . '<br>';
}