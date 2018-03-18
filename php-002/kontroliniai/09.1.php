<?php
/*
Panaudodami prieš tai sukurtą klasę automobilis, sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę. automobilis klasę papildykite metodu “duomenys”, kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”. lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”. lengvasis automobilis ‐ tiesiog paprastas žodis.
*/

class automobilis {
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($ga, $mo, $me){
        $this->gamintojas = $ga;
        $this->modelis = $mo;
        $this->metai = $me;
    }
    function duomenys(){
        $s = "%s - %s - %s";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}

class lengvasis extends automobilis {
    function duomenys(){
        $s = "%s,  %s, %s (lengvasis automobilis)";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}

class krovininis extends automobilis {
}

$aut = new automobilis('VW', 'Saloon', '2006');
$aut->duomenys();
echo "<br>";

$aut = new lengvasis('VW', 'Passat', '2006');
$aut->duomenys();
echo "<br>";

$aut = new krovininis('VW', 'Transporter', '2006');
$aut->duomenys();