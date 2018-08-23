<?php
/**
 Yra indeksinis (paprastas) žmonių masyvas, kur kiekvienas žmogus yra kaip asociatyvinis masyvas: vardas, lytis. Suskaičiuoti kiek vyrų ir kiek moterų. Naudoti foreach.
 */

$mas = [
    ['vardas' => 'Jonas', 'lytis' => 'vyras'],
    ['vardas' => 'Petras', 'lytis' => 'vyras'],
    ['vardas' => 'Antanas', 'lytis' => 'vyras'],
    ['vardas' => 'Marytė', 'lytis' => 'moteris'],
    ['vardas' => 'Auksė', 'lytis' => 'moteris'],
    ['vardas' => 'Elena', 'lytis' => 'moteris']
];

function moteru($m){
    $s = 0;
    foreach($m as $z){
        if ($z['lytis']=='moteris') $s++;
    }
    return $s;
}

function vyru($m){
    $s = 0;
    foreach($m as $z){
        if ($z['lytis']=='vyras') $s++;
    }
    return $s;
}

$s = "Vyrų: %s, moterų: %s";
echo sprintf($s, vyru($mas), moteru($mas));