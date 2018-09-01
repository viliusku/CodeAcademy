<?php

class a {
    function info(){
        echo 'labas';
    }
}

class b extends a {
    function info(){
        parent::info();
        echo ' rytas';
    }
}

$o = new b();
$o->info();