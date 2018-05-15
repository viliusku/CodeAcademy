<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi savybes ‐ gamintojas, modelis, metai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐ perduotus parametrus padėtų į savo savybes.
*/

class automobilis {
    public $gamintojas, $modelis, $metai;
    function __construct($gam, $mod, $met){
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;
    }
}

$o = new automobilis('Honda', 'Civic', 2005);
var_dump($o);