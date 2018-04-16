<?php

$m1 = [1,2,7,5,6];
$m2 = [0,2,7,8,9];
$m = array_merge(array_intersect($m1, $m2));
var_dump($m);
if (in_array(11, $m1)) echo 'yra'; else echo 'nera';