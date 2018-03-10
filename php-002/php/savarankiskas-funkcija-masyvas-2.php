<?php
/**
Yra masyvas su skaičiais. Padaryti funkciją, kuri gavusi kaip parametrą masyvą nelyginius skaičius pakeistų nuliais. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.
 */
function f1($m){
    $mm = [];
    foreach($m as $x) $mm[] = $x % 2 == 0 ? $x : 0;
    return $mm;
}
function f2($m){
    $i = 0;
    while($i<count($m)){
        $m[$i] = $m[$i] % 2 == 0 ? : 0;
        $i++;
    }
    return $m;
}
function f3($m){
    for($i=0; $i<count($m); $i++){
        $m[$i] = $m[$i] % 2 == 0 ? : 0;
    }
    return $m;
}
function f4($m){
    for($i=count($m)-1; $i>=0; $i--){
        $m[$i] = $m[$i] % 2 == 0 ? : 0;
    }
    return $m;
}
var_dump(f3([1,4,6,7]));