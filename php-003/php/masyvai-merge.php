<?php

$m1 = [7, 1,3,4];
$m2 = [5, 2];

$m = array_merge($m1, $m2);
var_dump($m);
sort($m);
var_dump($m);