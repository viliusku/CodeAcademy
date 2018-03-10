<?php
/**
Yra masyvas su tekstais. Padaryti funkciją, kuri pakeistu kiekvieno masyvo elemento tekstą į teksto ilgį (skaičių) . Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.
 */

function f($m){
    for($i=0; $i<count($m) / 2; $i++){
        $m[$i] = strlen($m[$i]);
    }
    return $m;
}

var_dump(f(['aaa', 'bbbb', 'tttttt']));
