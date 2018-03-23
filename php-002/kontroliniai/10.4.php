<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę textList, kurioje būtų viena savybė ‐ $texts, kuri bus masyvas, taip pat būtų metodas add($text), kuris prideda naują tekstą į masyvą sąvybę $texts. Taip pat sukurkite metodą symbols(), kuris grąžintų masyve sąvybėje esančių elementų simbolių skaičių
*/

class textList {
    public $texts = [];
    function add($text){
        $this->texts[] = $text;
    }
    function symbols(){
        $s = 0;
        foreach($this->texts as $text){
            $s+= strlen($text);
        }
        return $s;
    }
}

$x = new textList();
$x->add('aaa');
$x->add('bbb');
$x->add('ccc');
$x->add('ddd');
$x->add('eee');

echo $x->symbols();