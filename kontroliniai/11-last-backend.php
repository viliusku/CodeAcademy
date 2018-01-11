<?php
/*
Sukurkite HTML dokumentą su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Šalies pavadinimas, sostinės pavadinimas, 1x radio pasirinkimas: Šalies tipas vakarų, rytų. Forma turėtu būti nusiųsta į 11-last-backend.php failą metodu POST. 11-last-backend.php faile pridėkite įrašą į sesiją ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą
*/

session_start();

if (!isset($_SESSION['salys'])) $_SESSION['salys'] = [];

$_SESSION['salys'][] = $_POST;

//var_dump($_SESSION);

header('location: 11-last-frontend.html');