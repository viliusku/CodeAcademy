<?php
/**
Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriškas, kurios paveldi dviratis klasę. Dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “Gamintojas modelis (kaina)”. Moteriškas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Gamintojas modelis - moteriškas”. moteriškas - tiesiog paprastas žodis.
 */

class dviratis {
    public $gamintojas;
    public $modelis;
    public $kaina;
    function __construct($g, $m, $k){
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->kaina = $k;
    }
    function info(){
        $s = "%s %s (%s)";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->kaina);
    }
}

$s = new dviratis('UniBike', 'Moteriškas', 1000);
$s->info();
echo '<br>';

class vyriskas extends dviratis {}

$s = new vyriskas('UniBike', 'Vyriškas', 900);
$s->info();
echo '<br>';

class moteriskas extends dviratis {
    function info(){
        $s = "%s %s - moteriškas";
        echo sprintf($s, $this->gamintojas, $this->modelis);
    }
}

$s = new moteriskas('UniBike', 'Moteriškas', 1000);
$s->info();