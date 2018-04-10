<?php

$m = ['BMW', 'Audi', 'Honda'];
var_dump($m);
echo $m[2] . '<br>';
$m[1] = 'Hyundai';
echo $m[1] . '<br>';
var_dump($m);
echo json_encode($m);
$m[] = 'Skoda';
var_dump($m);
array_splice($m, 1, 1);
var_dump($m);
echo count($m);