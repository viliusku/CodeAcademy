<?php
/**
 *
 *
Yra masyvas su tekstais. Padaryti funkciją, kuri masyvo tekstuose pakeistų nurodytą raidę į tarpą. Funkcijos parametrai: masyvas ir nurodyta raidė. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.
 *
 */

$mas = ['abc', 'bce', 'cdf'];
function fnc($m, $r, $t = ' '){
    for ($i=0; $i<count($m); $i++){
        $m[$i] = str_replace($r, $t, $m[$i]);
    }
    return $m;
}

//echo json_encode($mas = fnc($mas, 'b')) . '<br>';
$mas = fnc($mas, 'b');
echo json_encode($mas) . '<br>';
echo json_encode(fnc($mas, ' ', '_'));


