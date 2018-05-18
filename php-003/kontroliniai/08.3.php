<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “preke”, kuri turi savybes ‐ kodas, pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ kodas, pavadinimas, kaina padėtų į savo savybes.
*/
class preke {
    public $kodas, $pavadinimas, $kaina;
    function __construct($ko, $pa, $ka){
        $this->kodas = $ko;
        $this->pavadinimas = $pa;
        $this->kaina = $ka;
    }
}
$o = new preke('001', 'Gėrimas', 1);
var_dump($o);