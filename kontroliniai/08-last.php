<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “salis”, kuri turi savybes ‐ pavadinimas, sostine, gyventojai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, sostine, gyventojai ‐ perduotus parametrus padėtų į savo savybes.
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
}

$s = new salis('Lietuva', 'Vilnius', 2800000);

var_dump($s);
