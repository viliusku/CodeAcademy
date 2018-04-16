<?php

$s = 'laBas rYTas kaUNas vilnIUS';
$m = explode(' ', $s);
var_dump($m);
//for ($i=0; $i<count($m); $i++){
    //$e = $m[$i];
    //$e = strtolower($e);
    //$e = ucfirst($e);
    //$m[$i] = $e;
    //$m[$i] = ucfirst(strtolower($m[$i]));
//}
$m2 = array_map(function($e){
    return ucfirst(strtolower($e));
}, $m);
$s2 = implode(', ', $m2);
echo $s2;