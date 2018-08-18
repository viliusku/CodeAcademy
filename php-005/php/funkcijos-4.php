<?php

function rmas($parms){
    $defaults = [
        'n' => 1,
        'start' => 1,
        'stop' => 10
    ];
    $m = [];
    $options = array_merge($defaults, $parms);
    for ($i=0; $i<$options['n']; $i++){
        $m[] = rand($options['start'], $options['stop']);
    }
    return $m;
}

$m = rmas([
    'n' => 10
]);

var_dump($m);