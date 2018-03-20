<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 4 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis, pirmą raidę - didžiąja ir pridėdami gale teksto tašką.
*/

$m = [
    'a' => 'AAAAA',
    'b' => 'BBBBB',
    'c' => 'CCCCC',
    'd' => 'DDDDD',
    'e' => 'EEEEE'
];

foreach($m as $key => $value) $m[$key] = ucfirst(strtolower($value)) . '.';

var_dump($m);