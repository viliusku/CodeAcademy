<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzaminų rezultatus: vardas, fizika, matematika, programavimas (dšimtbalėje sistemoje). Sukurti metodą, kuris gražina visus egzaminus išlaikiusių studentų sąrašą (egzaminas yra išlaikytas, jeigu rezultatas yra >= 5. Sukurti metodą, kuris gražina egzaminų laikymo vidurkį. Pademonstruoti veikimą.
 */

class cla {
    public $sarasas = [];
    function add($v, $f, $m, $p){
        $this->sarasas[] = [
          'vardas' => $v,
          'fizika' => $f,
          'matematika' => $m,
          'programavimas' => $p
        ];
    }
    function islaike(){
        $m = [];
        foreach($this->sarasas as $stud){
            if ($stud['fizika']>=5 and $stud['matematika']>=5 && $stud['programavimas']>=5) $m[] = $stud['vardas'];
        }
        return $m;
    }
    function vidurkis(){
        $s = 0;
        foreach($this->sarasas as $stud){
            $s += $stud['fizika'] + $stud['matematika'] + $stud['programavimas'];
        }
        return $s / (count($this->sarasas) * 3);
    }
}

$o = new cla();
$o->add('Jonas', 10, 8, 9);
$o->add('Petras', 6, 4, 8);
$o->add('Marytė', 5, 9, 7);
$isl = $o->islaike();
var_dump($isl);
echo $o->vidurkis();