<?php

class cla {
    public $m = [];
    function ideti($skaicius){
        $this->m[] = $skaicius;
    }
    function vidurkis(){
        $s = 0;
        foreach($this->m as $x){
            $s += $x;
        }
        return $s / count($this->m);
    }
}

$obj = new cla();
$obj->ideti(15);
$obj->ideti(5);
$obj->ideti(75);
$obj->ideti(35);
$obj->ideti(11);
var_dump($obj);
echo $obj->vidurkis();
