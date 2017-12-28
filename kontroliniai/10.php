<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį
*/

class numberList {
    public $numbers;
    function add($number){
        if (!isset($this->numbers)) $this->numbers = [];
        $this->numbers[] = $number;
    }
    function average(){
        $sum = 0;
        for ($i=0; $i<count($this->numbers); $i++){
            $sum += $this->numbers[$i];
        }
        return $sum / count($this->numbers);
    }
}

$objektas = new numberList();

$objektas->add(1);
$objektas->add(13);
$objektas->add(1103);
$objektas->add(133);
$objektas->add(555);

echo $objektas->average();