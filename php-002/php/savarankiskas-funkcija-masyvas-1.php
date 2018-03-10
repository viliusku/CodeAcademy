<?php
/**
Yra masyvas su tekstais. Padaryti funkciją, kuri gavusi kaip parametrą masyvą pirmąsias masyvo elementų tekstų raides paverstu džiosiomis, o kitas - mažosiomis. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.
 */

function f($m){
    for($i=0; $i<count($m); $i++){
        $m[$i] = ucfirst(strtolower($m[$i]));
    }
    return $m;
}

var_dump(f(['aBc', 'ddd', 'HHH']));
