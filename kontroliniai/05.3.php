<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris codeAcademy kursus, kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose  masyvuose turi būti laukeliai: kurso pavadinimas, mokinių skaičius, kursų pradžios data.
*/

$m = [
    ['kuso pavadinimas' => 'PHP kursai', 'mokinių skaičius' => 11, 'kursų pradžios data' => '2017-12-10'],
    ['kuso pavadinimas' => 'Front-end kursai', 'mokinių skaičius' => 14, 'kursų pradžios data' => '2018-01-15'],
    ['kuso pavadinimas' => 'Internetinių puslapių kūrimo ir reklamos internete kursai', 'mokinių skaičius' => 13, 'kursų pradžios data' => '2018-02-28']
];

var_dump($m);