<?php
/**
Sukurti klasę, kuri turi savybę - skaičių sąrašas. Sukurti metodą, kuris sugeneruotų atsitiktinį skaičių intervale nuo 1 iki 100 ir patalpintų į sąrašą, o po to surūšiuotų sąrašą. Sukurti metodą, kuris gražiną sugeneruotų skaičių aritmetinį vidurkį. Sukurti metodą, kuris išveda masyvo elementus tekstu, kur masyvo elementai atskirti kableliais. Pademonstruoti veikimą.
 */
class cla {
    public $skaiciai = [];
    function add(){
        $this->skaiciai[] = rand(1, 100);
        sort($this->skaiciai);
    }
    function vidurkis(){
        $s = 0;
        foreach($this->skaiciai as $sk) $s += $sk;
        return $s / count($this->skaiciai);
    }
    function tekstas(){
        return implode(',', $this->skaiciai);
    }
}
$o = new cla();
$o->add();
$o->add();
$o->add();
$o->add();
$o->add();
echo 'Vidurkis: ' . $o->vidurkis() . ', tekstas: ' . $o->tekstas();