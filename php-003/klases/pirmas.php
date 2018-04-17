<?php

class asmuo {
    public $vardas = 'Jonas';
    public $pavarde = 'Jonaitis';
    private $atlyginimas = 1000;
}

$o = new asmuo();
var_dump($o);
echo $o->vardas . ' ' . $o->pavarde . '<br>';
echo $o->atlyginimas;