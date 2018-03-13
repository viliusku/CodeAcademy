<?php

class a {
    private $a, $k;
    private $b;
    function fnc(){
        return $this->a * $this->b;
    }
    function __construct($xx, $yy){
        $this->a = $xx;
        $this->b = $yy;
    }
}

$c = new a(2,3);
echo $c->fnc() . '<br>';