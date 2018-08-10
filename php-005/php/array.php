<?php

$m = [1,4,5,10,7];

echo $m[0] + $m[2];
echo '<br>';
echo count($m);
$m[3] = 100;
var_dump($m);
$m[5] = 'labas';
$m[] = 'rytas';
var_dump($m);
array_splice($m,2,1);
var_dump($m);

$m = array(1,4,5,10,7);
