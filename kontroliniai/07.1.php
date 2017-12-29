<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas asociatyvinis masyvas iš 5 elementų ‐ teksto eilučių. Panaudodami foreach ciklą pakeiskite visus masyvo elementus ‐ paversdami tekstą mazosiomis raidėmis, o pirmaja raide - didziaja.
*/

$m = [
    'a' => 'AAAAA',
    'b' => 'BBBBB',
    'c' => 'CCCCC',
    'd' => 'DDDDD',
    'e' => 'EEEEE'
];

foreach($m as $key => $value) $m[$key] = ucfirst(strtolower($value));

var_dump($m);