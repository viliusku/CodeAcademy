<?php
/*
Sukurkite PHP skriptą, kuriame aprašykite klasę lentele, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas add, kurio parametras yra 3 skaičių masyvas. Patalpinti gautą masyvą į savybės %table masyvą. Sukurkite metodą get(),kuris paskaičiuoja kiekvienoje lentelės eilutėje esančių elemntų vidurkį ir jų patalpina į eilutės pabaigą. Išvesti savybės $table masyvą HTML lentele. Pademonstruokite veikimą.
*/

class lentele {
    public $table = [];
    function add($m){
        $s = 0;
        foreach($m as $number){
            $s += $number;
        }
        $m[] = $s / count($m);
        $this->table[] = $m;
    }
    function get(){
        echo '<table>';
        for ($i=0; $i<count($this->table); $i++){
            echo '<tr>';
            for ($j=0; $j<count($this->table[$i]); $j++){
                echo '<td>' . $this->table[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}

$a = new lentele();
$a->add([1,2,5]);
$a->add([6,22,55]);
$a->add([16,27,51]);
$a->get();