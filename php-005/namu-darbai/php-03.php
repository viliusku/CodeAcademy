<?php
/**
Yra sąrašas darbuotojų kurie turi asmenines sąskaitas (indeksinis sąrašas, kuriame yra darbuotojai aprašyti asociativiu masyvu: vardas, sąskaita). Kai kuriems darbuotojams duoti premiją (100 EUR). Darbuotojai, kuriems priklauso premija: Antanas, Petras, Juozas. Naudoti while ir switch. išvesti su var_dump.
 */

$m = [
  [
      'vardas' => 'Antanas',
      'saskaita' => 0
  ],
    [
        'vardas' => 'Petras',
        'saskaita' => 0
    ],
    [
        'vardas' => 'Juozas',
        'saskaita' => 0
    ],
    [
        'vardas' => 'Andrius',
        'saskaita' => 0
    ],
    [
        'vardas' => 'Tomas',
        'saskaita' => 0
    ]
];

$i = 0;
while ($i < count($m)){
    switch($m[$i]['vardas']){
        case 'Antanas':
        case 'Petras':
        case 'Juozas': $m[$i]['saskaita'] += 100; break;
        default:;
    }

    $i++;
}
var_dump($m);