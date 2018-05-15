<?php
/*
Panaudodami prieš tai sukurtą klasę automobilis, sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę. automobilis klasę papildykite metodu “duomenys”, kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”. lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”. lengvasis automobilis ‐ tiesiog paprastas žodis.
*/

class automobilis {
    public $gamintojas, $modelis, $metai;
    function __construct($gam, $mod, $met){
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;
    }
    function duomenys(){
        $s = "%s - %s - %s";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
class krovininis extends automobilis {

}
class lengvasis extends automobilis {
    function duomenys(){
        $s = "%s, %s, %s (lengvasis automobilis)";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}

$o = new automobilis('Honda', 'Civic', 2005);
$o->duomenys();
echo '<br>';
$o = new krovininis('Ford', 'Transit', 2008);
$o->duomenys();
echo '<br>';
$o = new lengvasis('BMW', '320i', 2011);
$o->duomenys();
