<?php
/**
 *
 *
Yra masyvas su tekstais. Padaryti funkciją, kuri vietoje tekstų į masyvą įrašytų tekstų pirmąsias raides. Funkcijos parametras - masyvas. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.
 *
 */

$mas = ['abc', 'bce', 'cdf'];
function fnc($m){
    for ($i=0; $i<count($m); $i++){
        $m[$i] = substr($m[$i], 0 , 1);
    }
    return $m;
}

echo json_encode(fnc($mas));