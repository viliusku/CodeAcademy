<?php

$m = [1,2,1,3,3,4,5,6,4,5];
$m2 = array_merge(array_unique($m));
var_dump($m2);