<?php

$m1 = [1,3,5,7,9];
$m2 = [1,4,5,6,9];

$m = array_merge(array_diff($m1, $m2));
var_dump($m);