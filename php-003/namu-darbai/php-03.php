<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas asociatyvinis masyvas iš 5 elementų ‐ skaičių. Panaudodami foreach ciklą pakeiskite visus nelyginus skaičius nuliais. Pademonstruokite rezultatą.
 */

$m = [
    'a' => 1,
    'b' => 6,
    'c' => 4,
    'd' => 7,
    'e' => 10
];

foreach($m as $key => $value){
    if ($value % 2 != 0){
        $m[$key] = 0;
    }
}

var_dump($m);