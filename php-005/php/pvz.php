<?php

$m = ['laBas', 'ryTAS', 'staI', 'ir', 'aS'];
$s = 0;
for ($i=0; $i<count($m); $i++){
    $m[$i] = ucfirst(strtolower($m[$i]));
    $s += strlen($m[$i]);
}
echo $s;
var_dump($m);