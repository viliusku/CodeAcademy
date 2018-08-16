<?php

function f(){
    echo 'labas' . '<br>';
}
f();
f();
f();

function kv($a){
    echo $a * $a;
}

kv(2); echo '<br>';
kv(3); echo '<br>';
kv(4); echo '<br>';
kv(5); echo '<br>';

function daug($a, $b){
    return $a * $b;
}

$x = 5 + 6 + daug(3, 5);
echo $x;
