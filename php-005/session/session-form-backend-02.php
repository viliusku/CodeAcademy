<?php
session_start();
$_SESSION['asmenys'][] = [
    'vardas' => $_POST['vardas'],
    'pavarde' => $_POST['pavarde'],
    'laikas' => date("Y-m-d H:m:s")
];

usort($_SESSION['asmenys'], function($a, $b){
    if (strcmp($a['laikas'], $b['laikas']) > 0) return -1;
    elseif (strcmp($a['laikas'], $b['laikas']) < 0) return 1;
    else return 0;
});

header("location: session-form-frontend-02.php");