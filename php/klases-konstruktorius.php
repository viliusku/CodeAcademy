<?php

class darbuotojas {
    public $vardas;
    public $pavarde;
    public $atlyginimas;
    function __construct($vard, $pav, $atl){
        $this->vardas = $vard;
        $this->pavarde = $pav;
        $this->atlyginimas = $atl;
    }
    function info(){
        $s = 'Vardas: %s, pavarde: %s, atlyginimas: %s EUR';
        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }
    function vardas_pavarde($skyriklis){
        return $this->vardas . $skyriklis . $this->pavarde;
    }
}

$d = new darbuotojas('Jonas', 'Jonaitis', 1500);
var_dump($d);

echo $d->info() .'<br>';
echo $d->vardas_pavarde(' ') .'<br>';
echo $d->vardas_pavarde(' * ') .'<br>';
