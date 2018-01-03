<?php
/*
Sukurkite HTML dokumentą 11.1-frontend.html su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Vardas, Pavardė, 1x radio pasirinkimas: Valgis:‐ mėsiškas, žuvies, vegetariškas. Forma turėtu būti nusiųsta į 11.1-backend.php failą metodu GET. 11.1-backend.php faile pridėkite įrašą į sesiją, įrašykite į tekstinį failą (papildydami jį) 11.1-file.txt (failo atidarymo tipas a)  ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą
*/

session_start();

if (!isset($_SESSION['asmenys'])) $_SESSION['v'] = [];

$_SESSION['asmenys'][] = $_GET;

$s = '';
foreach($_GET as $key => $value){
    $s.= "{$key} => {$value} ";
}
$s.= "\n"; // \n - teksto eilutės faile pabaigos kodas, kad perkeltų į naują eilutę

$f = fopen('11.1-file.txt', 'a');
fwrite($f, $s);
fclose($f);

header('location: 11.1-frontend.html');