<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas taksi automobilio asociatyvinis masyvas, kurio raktai yra: gamintojas, modelis, metai, vairuotojai. Vairuotojai taip pat turi būti asociatyvinis masyvas, kurio raktai: vardas, pavarde, stazas.
*/

$a = [
    'gamintojas' => 'Honda',
    'modelis' => 'Civic',
    'metai' => 2005,
    'vairuotojai' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'stazas' => 15
    ]
];

var_dump($a);