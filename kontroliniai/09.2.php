<?php
/*
Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “kursas” veikimą.
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
    function kursas(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}

$a = new codeAcademy('2017-12-10', 11, '3sale');
$a->kursas();

class backend extends codeAcademy {
    function kursas(){
        $s = "%s, %s, %s (backend kursas)";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}
echo '<br>';
$a = new backend('2017-12-10', 11, '3sale');
$a->kursas();

class frontend extends codeAcademy {
    function kursas(){
        $s = "%s, %s, %s (frontend kursas)";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}
echo '<br>';
$a = new frontend('2017-12-10', 11, '3sale');
$a->kursas();