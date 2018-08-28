<?php

class asmuo {
    public $vardas, $pavarde;
    function __construct($v, $p){
        $this->vardas = $v;
        $this->pavarde = $p;
    }
    function info(){
        $s = "Vardas: %s, pavardė: %s";
        echo sprintf($s, $this->vardas, $this->pavarde);
    }
}

$o = new asmuo('Jonas', 'Jonaitis');
var_dump($o);
$o->info();
echo '<br>';

class studentas extends asmuo {
    public $universitetas;
    function __construct($v, $p, $u){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->universitetas = $u;
    }
    function info(){
        $s = "Vardas: %s, pavardė: %s studentas, mokosi: %s";
        echo sprintf($s, $this->vardas, $this->pavarde, $this->universitetas);
    }
}

$o = new studentas('Petras', 'Petraitis', 'KTU');
$o->info();
echo '<br>';

class aaa extends studentas{

}
$o = new aaa('Antanas', 'Antanaitis', 'VDU');
$o->info();