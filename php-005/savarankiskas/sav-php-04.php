<?php
/*
Yra duotas tekstų masyvas. Išvesti visus tekstus, kurie prasideda simboliais a arba b.
*/

function f($t){
    //$x = substr($t, 0, 1) == 'A' || substr($t, 0, 1) == 'B' ? true : false;
    //return $x;
    return  substr($t, 0, 1) == 'A' || substr($t, 0, 1) == 'B';
}