<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę taupyklė, kurioje būtų viena savybė - $pinigai, kuri bus masyvas, taip pat būtų metodas add($pinigas), kuris prideda naują pinigą į masyvą sąvybę $pinigai. Taip pat sukurkite metodą vidurkis(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį.
 */

class taupykle {
    public $pinigai = [];
    function add($pinigas){
        $this->pinigai[] = $pinigas;
    }
    function vidurkis(){
        $s = 0;
        foreach($this->pinigai as $pinigas){
            $s += $pinigas;
        }
        return $s / count($this->pinigai);
    }
}

$c = new taupykle();

$c->add(1);
$c->add(5);
$c->add(10);
$c->add(50);

echo $c->vidurkis();