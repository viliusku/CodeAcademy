<?php
/*
Panaudodami prieš tai sukurtą klasę salis, sukurkite klases vakaru_salis ir rytu_salis, kurios paveldi salis klasę. Salis klasę papildykite metodu “informacija”, kuris išvestų suformatuotą eilutę “šalis, sostinė, gyventojai”. rytu_salis klasėje perrašykite metodą informacija, pakeisdami išvedamą eilutę į “šalis, sostinė, gyventojai (Rytų šalis)”. Rytų šalis ‐ tiesiog paprastas tekstas.
*/

class salis {
    public $pavadinimas;
    public $sostine;
    public $gyventojai;
    function __construct($p, $s, $g){
        $this->pavadinimas = $p;
        $this->sostine = $s;
        $this->gyventojai = $g;
    }
    function informacija(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->pavadinimas, $this->sostine, $this->gyventojai);
    }
}

$s = new salis('Lietuva', 'Vilnius', 2800000);
$s->informacija();
echo '<br>';

class vakaru_salis extends salis {}

$s = new vakaru_salis('JAV', 'Vasingtonas', 350000000);
$s->informacija();
echo '<br>';

class rytu_salis extends salis {
    function informacija(){
        $s = "%s, %s, %s (rytų šalis)";
        echo sprintf($s, $this->pavadinimas, $this->sostine, $this->gyventojai);
    }
}

$s = new rytu_salis('Kinija', 'pekinas', 1500000000);
$s->informacija();
