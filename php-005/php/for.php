<?php

$m = [1,3,5,11,23,15];

$s = 0;
/*
foreach($m as $e){
    $s += $e;
}
*/

for ($i=0; $i < count($m); $i++){
    $s += $m[$i];
}
echo round($s / count($m), 2);