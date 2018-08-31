<?php
/**
Sukurkite klasę prekė, kuri turi savybes: pavadinimas, kaina. Sukurkite klasę parduotuvė, su savybe prekės (masyvas). Sukurkite klasėje parduotuvė metodą tiekimas, kuris padeda prekę į savybę prekės kaip klasės prekė objekto egzempliorių. Sukurkite parduotuvės metodą atrinkti, kuris atrenka ir gražina prekes (klasės prekė objektų masyvą) pagal kainos intervalą: nuo min iki max. Pademonstruoti veikimą.
 */

class preke {
    public $pavadinimas, $kaina;
    function __construct($p, $k){
        $this->pavadinimas = $p;
        $this->kaina = $k;
    }
}

class parduotuve {
    public $prekes = [];
    function tiekimas($pav, $kai){
        $this->prekes[] = new preke($pav, $kai);
    }
    function atrinkti($min, $max){
        $mas = [];
        foreach($this->prekes as $preke){
            if ($preke->kaina>= $min && $preke->kaina<= $max){
                $mas[] = $preke;
            }
        }
        return $mas;
    }
}

$o = new parduotuve();
$o->tiekimas('Arbūzas', 3);
$o->tiekimas('Šnapsas', 10);
$o->tiekimas('Dešra', 8);
$o->tiekimas('Sūris', 15);
$o->tiekimas('Ikra', 30);

$m = $o->atrinkti(8, 15);
var_dump($o);
var_dump($m);