<?php

interface x {
    public function info();
}

class a implements x {
    public $s = 'labas';
    function info(){
        echo $this->s;
    }
}

$o = new a();
$o->info();