<?php
/**
Sukurkite HTML dokumenta su įvedimo forma. Forma turėtu turėti laukus: 3x tekstiniai laukai:  dviračio gamintojas, dviračio modelis, dviračio kaina, 1x radio pasirinkimas (paskirtis): moteriškas, vyriškas, sportinis. Forma turi būti nusiųsta į backend PHP failą metodu POST. Backend faile  pridėkite įrašą į sesiją ir redirektinkite vartotoją atgal į įvedimo formos HTML dokumentą. 
 */
session_start();

if (!isset($_SESSION['dviraciai'])) $_SESSION['dviraciai'] = [];

$_SESSION['dviraciai'][] = $_POST;

//var_dump($_SESSION);

header('location: 11-frontend.html');