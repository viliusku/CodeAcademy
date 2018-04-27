<?php
/**
Sukurkite klasę su prekių sąrašu. Sukurkite metodą, kurio pagalba galima patalpintį į sąrašą duomenis apie prekes: pavadinimas, kaina, kiekis. Sukurkite metodą, kuris gražina prekių sąrašą su 3 pigiausiomis prekėmis. Pademonstruokite veikimą.
 */

class prekes {
    public $sarasas = [];
    function add($p, $ka, $ki){
        $this->sarasas[] = [
          'pav' => $p,
          'kai' => $ka,
          'kie' => $ki
        ];
        usort($this->sarasas, function($a, $b){
           if ($a['kai']>$b['kai']) return 1;
           elseif ($a['kai']<$b['kai']) return -1;
           else return 0;
        });
    }
    function info(){
       $m = [];
       for ($i=0; $i<count($this->sarasas) && $i<3; $i++){
            $m[] = $this->sarasas[$i];
       }
       return $m;
    }
}

$o = new prekes();
$o->add('Kompiuteris', 500, 10);
$o->add('Printeris', 100, 20);
$o->add('Pele', 10, 50);
$o->add('Stalas', 300, 15);

$rez = $o->info();
var_dump($rez);