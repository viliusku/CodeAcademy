<?php

$m = [];
$m[] = [1,2,5];
$m[] = [3,8,9];
$m[] = [11,12,15];

//var_dump($m);
// paimti stulpeli 1,2
echo $m[1][2] .'<br>';
var_dump($m[1]);

$i = 1;
$j = 2;

echo $m[$i][$j] .'<br>';
//$m[$i] = [];
//var_dump($m[$i]);
// kiek yra eiluciu
echo count($m) . '<br>';
echo count($m[$i]) . '<br>';
var_dump($m);

for ($i=0; $i<count($m); $i++){
    // $m[$i] - rodys i eiline eilute
    $suma = 0;
    for ($j=0; $j<count($m[$i]); $j++){
        // $m[$i][$j] - rodo i elini stulpeli eilineje eiluteje
        $suma += $m[$i][$j];
    }
    $m[$i][] = round($suma / count($m[$i]), 2);
}
var_dump($m);
