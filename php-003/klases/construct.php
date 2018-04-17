<?php

class asmuo {
    public $var;
    public $pav;
    public $par;
    function __construct($vr, $pv, $pr){
        $this->var = $vr;
        $this->pav = $pv;
        $this->par = $pr;
    }

    function getInfo(){
        $s = "%s %s yra %s";
        echo sprintf($s, $this->var, $this->pav, $this->par). '<br>';
    }
}

$o = new asmuo('Petras', 'Petraitis', 'darbininkas');
$o->getInfo();
$o = new asmuo('Jonas', 'Jonaitis', 'direktorius');
$o->getInfo();
$o = new asmuo('Antanas', 'Antanaitis', 'vadybininkas');
$o->getInfo();