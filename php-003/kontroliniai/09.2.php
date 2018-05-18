<?php
/*
Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “kursas” veikimą.
*/

class codeAcademy {
    public $data, $skaicius, $auditorija;
    function __construct($d, $s, $a){
        $this->data = $d;
        $this->skaicius = $s;
        $this->auditorija = $a;
    }
    function kursas(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}
class backend extends codeAcademy {
    function kursas(){
        $s = "%s, %s, %s (backend kursas)";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}
class frontend extends codeAcademy {
    function kursas(){
        $s = "%s, %s, %s (frontend kursas)";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}
$o = new codeAcademy('2018-06-01', 10, 2);
$o->kursas(); echo '<br>';
$o = new backend('2018-07-01', 12, 1);
$o->kursas(); echo '<br>';
$o = new frontend('2018-08-01', 11, 3);
$o->kursas();
