<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti norimą kiekį skaičių (funkcijos parametras turi būti masyvas). Sukurti metodą, kuris gražina didžiausią skaičių iš sąrašo. Sukurti metodą, kuri gražina mažiausią skaičių iš sąrašo. Pademonstruoti veikimą.
 */

class cla {
    public $sarasas = [];
    function add($m){
        foreach($m as $sk) $this->sarasas[] = $sk;
    }
    function getMin(){
        $s = $this->sarasas[0];
        foreach($this->sarasas as $sk){
            if ($sk < $s) $s = $sk;
        }
        return $s;
    }
    function getMax(){
        $s = $this->sarasas[0];
        foreach($this->sarasas as $sk){
            if ($sk > $s) $s = $sk;
        }
        return $s;
    }
}
$o = new cla();
$o->add([1,3,5,6,7,8]);
$o->add([11,23,24,24,12]);
echo 'Max: ' . $o->getMax() . ', Min: ' . $o->getMin();