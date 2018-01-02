<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi savybes ‐ gamintojas, modelis, metai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐ perduotus parametrus padėtų į savo savybes.
*/

class automobilis {
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($ga, $mo, $me){
        $this->gamintojas = $ga;
        $this->modelis = $mo;
        $this->metai = $me;
    }
}

$x = new automobilis('Ford', 'Fiesta', 2000);

var_dump($x);