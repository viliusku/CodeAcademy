<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 5 parametrus ‐ skaičius, funkcija turi paskaičiuoti aritmenitinį vidurkį, ištraukti šaknį ir padauginti iš 10. Rezultatą gražinti. Iškviesti funkciją perduodant 5 parametrus (skaičius) ir parodyti rezultatą.
*/

function calc($p1, $p2, $p3, $p4, $p5){
    return sqrt(($p1 + $p2 + $p3 + $p4 + $p5)/5) * 10;
}

echo calc(1,2,3,4,5);