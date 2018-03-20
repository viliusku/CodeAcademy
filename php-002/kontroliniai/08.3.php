<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes ‐ pavadinimas, miestas, studentai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, miestas, studentai ‐ perduotus parametrus padėtų į savo savybes.
*/

class universitetas {
    public $pavadinimas;
    public $miestas;
    public $studentai;
    function __construct($pav, $mie, $stu){
        $this->pavadinimas = $pav;
        $this->miestas = $mie;
        $this->studentai = $stu;
    }
}

$o = new universitetas('KTU', 'Kaunas', 15000);

var_dump($o);