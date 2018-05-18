<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “miestas”, kuri turi savybes ‐ pavadinimas, gyventojų skaičius, regionas. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, gyventojų skaičius, regionas ‐ perduotus parametrus padėtų į savo savybes.
*/
class miestas {
    public $pavadinimas, $skaicius, $regionas;
    function __construct($p, $s, $r){
        $this->pavadinimas = $p;
        $this->skaicius = $s;
        $this->regionas = $r;
    }
}
$o = new miestas('Kaunas', 300000, 'Aukštaitija');
var_dump($o);