<?php
/*
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes ‐ pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus du parametrus ‐ pavadinimas, kaina ‐ perduotus parametrus padėtų į savo savybes. Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriskas, kurios paveldi dviratis klasę. dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, kaina”. moteriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: moteriskas”. moteriskas ‐ tiesiog paprastas žodis. vyriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: vyriskas”. vyriskas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/

class dviratis {
    public $pavadinimas;
    public $kaina;
    function __construct($p, $k){
        $this->kaina = $k;
        $this->pavadinimas = $p;
    }
    function info(){
        $s = "%s, %s";
        echo sprintf($s, $this->pavadinimas, $this->kaina);
    }
}

class moteriskas extends dviratis {
    function info(){
        $s = "%s, %s: moteriskas";
        echo sprintf($s, $this->pavadinimas, $this->kaina);
    }
}

class vyriskas extends dviratis {
    function info(){
        $s = "%s, %s: vyriskas";
        echo sprintf($s, $this->pavadinimas, $this->kaina);
    }
}

$d = new dviratis('Universalus dviratis', 500);
$d->info();
echo '<br>';

$d = new moteriskas('Dviratis Birute', 700);
$d->info();
echo '<br>';

$d = new vyriskas('Dviratis Mindaugas', 900);
$d->info();