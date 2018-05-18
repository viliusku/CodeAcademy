<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/
class codeAcademy {
    public $data, $skaicius, $auditorija;
    function __construct($d, $s, $a){
        $this->data = $d;
        $this->skaicius = $s;
        $this->auditorija = $a;
    }
}
$o = new codeAcademy('2018-06-01', 10, 2);
var_dump($o);