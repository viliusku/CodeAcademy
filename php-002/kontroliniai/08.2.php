<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/

class codeAcademy {
    public $data;
    public $skaicius;
    public $auditorija;
    function __construct($d, $s, $a){
        $this->data = $d;
        $this->skaicius = $s;
        $this->auditorija = $a;
    }
}

$a = new codeAcademy('2017-12-10', 11, '3sale');
var_dump($a);