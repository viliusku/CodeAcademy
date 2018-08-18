<?php

function rmas($n = 1, $start = 1, $stop = 10){
    $m = [];
    for ($i=0; $i<$n; $i++){
        $m[] = rand($start, $stop);
    }
    return $m;
}

$m = rmas(); var_dump($m);
$m = rmas(5); var_dump($m);
$m = rmas(3,3); var_dump($m);
$m = rmas(3,3, 100); var_dump($m);