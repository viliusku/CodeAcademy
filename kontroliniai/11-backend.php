<?php
/*
Sukurkite HTML dokumentą su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Įmonės pavadinimas, Įmonės kodas, 1x radio pasirinkimas: Kliento tipas‐ bronzinis, sidabrinis, auksinis. Forma turėtu būti nusiųsta į 11uzduotis.php failą metodu POST. 11uzduotis.php faile pridėkite įrašą į sesiją ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą
*/

session_start();

if (!isset($_SESSION['imones'])) $_SESSION['imones'] = []; // sukurti sesijoje paprastą masyvą 'imones' jeigu dar iki siol nebuvo sukurtas

$_SESSION['imones'][] = $_POST; // patalpinti į sesijos kintamajį 'imones' (masyvą) POST reikšmių asociatyvinį masyvą

header('location: 11-frontend.html'); // redirektinti vartotoją į įvedimo formos html dokumentą