<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries, kuri bus masyvas, taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį
*/
class countryList {
    public $countries = [];
    function insert($country){
        $this->countries[] = $country;
    }
    function average(){
        $suma = 0;
        foreach($this->countries as $cntry){
            $suma += strlen($cntry);
        }
        return $suma / count($this->countries);
    }
}

$x = new countryList();
$x->insert('Lietuva');
$x->insert('Latvija');
$x->insert('Graikija');
$x->insert('Moldavija');
echo $x->average();