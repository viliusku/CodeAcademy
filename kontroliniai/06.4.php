<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus du parametrus ‐ skaicius, funkcija turi sudeti skaicius, pakelti kvadratu ir padalinti is 3. Rezultata grazinti. Iskviesti funkcija perduodant du parametrus (skaicius) ir parodyti rezultata.
*/

function calc($a, $b){
    return (($a + $b)**2)/3;
}

echo calc(2,3);