<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, su 3 parametrais: minimalus skaicius, maksimalus skaicius, kiek atsitiktinių skaiciu sugeneruoti. Funkcija turi gražinti atsitiktinių skaičių masyvą. Pademonstruoti funkcijos veikimą.
*/

function calc($min, $max, $n){
    $m = [];
    for ($i=0; $i<$n; $i++){
        $m[] = rand($min, $max);
    }
    return $m;
}

var_dump(calc(1,20, 10));