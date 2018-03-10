<?php
/**
Yra masyvas su skaičiais. Padaryti funkciją, kuri gavusi kaip parametrą masyvą masyvo elementus esančius pirmoje masyvo pusėje pakeltu kvadratu . Funkcija turi gražinti pakeistą masyvą. Naudoti for. Pademonstruoti veikimą.
 */

function f($m){
    for($i=0; $i<count($m) / 2; $i++){
        $m[$i] = $m[$i] ** 2;
    }
    return $m;
}

var_dump(f([1,2,3,4,5,6]));
