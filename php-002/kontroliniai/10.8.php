<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Sukurkite metodą delMin(), kuris pašalina mažiausią masyve sąvybėje esantį skaičių. Sukurkite funkciją getInfo(), kuris išveda skaičius esančius savybėje.
*/

class numberList {
    public $numbers = [];
    function add($number){
        $this->numbers[] = $number;
    }
    function delMin(){
        $min = $this->numbers[0];
        $min_i = 0;
        for ($i=1; $i<count($this->numbers); $i++){
            if ($this->numbers[$i] < $min){
                $min = $this->numbers[$i];
                $min_i = $i;
            }
        }
        array_splice($this->numbers, $min_i, 1);
    }
    function getInfo(){
        foreach ($this->numbers as $number){
            echo $number . ' ';
        }
    }
}

$a = new numberList();
$a->add(1);
$a->add(10);
$a->add(-1);
$a->add(15);
$a->add(3);
$a->getInfo();
echo '<br>';
$a->delMin();
$a->getInfo();