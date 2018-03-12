<?php
/**
 *
 *
Yra du masyvai su skaičiais. Padaryti funkciją, kuri pakeistų nuliais visus pirmo masyvo elementus kurie egzistuoja ir antrame masyve (sutampančius). Funkcijos parametrai: du masyvai. Funkcija turi gražinti pakeistą pirmą masyvą. Pademonstruoti veikimą.
 *
 */

$m1 = [1,1,1,1,1,1,3,5,6,7,1];
$m2 = [1,3,7];

function fnc($a1, $a2){
    $x = array_values(array_intersect($a1, $a2));
    // [1,3,7]
    for ($i=0; $i<count($x); $i++){
        while(true){
            $ind = array_search($x[$i], $a1);
            if ($ind === false) break;
            $a1[$ind] = 0;
        }
    }
    return $a1;
}

var_dump(fnc($m1, $m2));


