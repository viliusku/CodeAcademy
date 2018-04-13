<?php

function kv($skaicius){
    echo $skaicius ** 2;
}

kv(5);
echo '<br>';
kv(6);
echo '<br>';
kv(12);
echo '<br>';

function daug($a = 1, $b = 2){
    return $a * $b;
}
$t = 1;
$daug = function($a, $b) use($t){
    return $a * $b * $t;
};

echo daug(2,2) . '<br>';
$x = daug(5,6);
echo $x . '<br>';

$x = 3; $y = 4;
echo daug($x, $y) . '<br>';
$x = 7; $y = 5;
echo daug($x, $y) . '<br>';
//unset($x);
echo $daug(2, 3) . '<br>';

$q = 'daug';
echo $q(3, 3) . '<br>';

echo daug(9) . '<br>';
echo daug() . '<br>';