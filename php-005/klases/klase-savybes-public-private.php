<?php

class abc {
    public $a = 5;
    private $b = 10;
    function getb(){
        return $this->b;
    }
    private function daug($a, $b){
        return $a * $b;
    }
    public function daugwrapper($x, $y){
        return $this->daug($x, $y);
    }
}

$o = new abc();
echo $o->a;
//echo $o->b; klaida, negalima
echo '<br>';
echo $o->getb();
//echo $o->daug(2, 3); negalima klaida
echo '<br>';
echo $o->daugwrapper(2, 3);
