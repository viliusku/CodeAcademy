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
        if (count($this->countries)>0){
            $s = 0;
            foreach($this->countries as $country){
                $s += strlen($country);
            }
            return $s / count($this->countries);
        }
        else return 0;
    }
}

$c = new countryList();

$c->insert('Lietuva');
$c->insert('Latvija');
$c->insert('Estija');
$c->insert('JAV');

echo $c->average();