<?php
/*
Panaudodami prieš tai sukurtą klasę "miestas", sukurkite klases "didelis" ir "mazas", kurios paveldi "miestas" klasę. "miestas" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, gyventojų skaičius, regionas”. "didelis" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “pavadinimas, gyventojų skaičius, regionas (didelis miestas)”. didelis miestas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/
class miestas {
    public $pavadinimas, $skaicius, $regionas;
    function __construct($p, $s, $r){
        $this->pavadinimas = $p;
        $this->skaicius = $s;
        $this->regionas = $r;
    }
    function info(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->pavadinimas, $this->skaicius, $this->regionas);
    }
}
class mazas extends miestas {

}
class didelis extends miestas {
    function info(){
        $s = "%s, %s, %s (didelis miestas)";
        echo sprintf($s, $this->pavadinimas, $this->skaicius, $this->regionas);
    }
}
$o = new miestas('Marijampolė', 60000, 'Suvalkija');
$o->info(); echo '<br>';
$o = new didelis('Kaunas', 300000, 'Aukštaitija');
$o->info(); echo '<br>';
$o = new mazas('Gargždai', 16000, 'Žemaitija');
$o->info();
