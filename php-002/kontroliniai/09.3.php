<?php
/*
Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases ktu ir vu, kurios paveldi universitetas klasę. universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, miestais, studentai”. ktu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (KTU)”. KTU ‐ tiesiog paprastas žodis. vu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (VU)”. VU ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
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
    function info(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$o = new universitetas('Universitetas', 'Lietuva', 100000);
$o->info(); echo "<br>";

class ktu extends universitetas {
    function info(){
        $s = "%s, %s, %s (KTU)";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$o = new ktu ('KTU', 'Kaunas', 15000);
$o->info(); echo "<br>";

class vu extends universitetas {
    function info(){
        $s = "%s, %s, %s (VU)";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$o = new vu ('VU', 'Vilnius', 17000);
$o->info();