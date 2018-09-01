<?php

class a {
    const aa = 'labas';
    static $n = 1;
    function info(){
        echo a::aa . ' rytas: ' . a::$n++ . '<br>';
    }
}

$o = new a();
$o->info();
$o = new a();
$o->info();
$o = new a();
$o->info();
$o = new a();
$o->info();
$o = new a();
$o->info();