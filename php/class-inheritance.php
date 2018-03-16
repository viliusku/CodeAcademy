<?php

class a {
    private $x;
    public $y;
    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
}
$p = new a(1,2);
var_dump($p);