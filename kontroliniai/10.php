<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį
*/

class numberList { // klases aprašas
    public $numbers; // savybė, kurioje bus talpinamas skaičių masyvas
    function add($number){ // funkcija įvesti skaičių ir patalpinti į masyvą (savybę)
        if (!isset($this->numbers)) $this->numbers = []; // jeigu savybė dar nėra naudota, tai įrašyti į ją tuščia paprastą masyvą
        $this->numbers[] = $number; // patalpinti į savybę (masyvą) skaičių
    }
    function average(){ // funkcija skaičių vidurkio skaičiavimui
        $sum = 0; // prieš skaičių sumos skaičiavime nustatome sumą = 0
        for ($i=0; $i<count($this->numbers); $i++){ // imame po skaičius iš savybės (masyvo) po vieną
            $sum += $this->numbers[$i]; // sumuojame eilinį skaičių iš masyvo prie sumos
        }
        return $sum / count($this->numbers); // padaliniame sumą iš skaičių masyve skaičiaus ir gražiname kaip funkcijos rezultatą
    }
}

$objektas = new numberList(); // sukuriame klasės objekto egzempliorių

$objektas->add(1); // įdedame skaičių
$objektas->add(13); // įdedame skaičių
$objektas->add(1103); // įdedame skaičių
$objektas->add(133); // įdedame skaičių
$objektas->add(555); // įdedame skaičių

echo $objektas->average(); // skaičiuojame vidurkį ir parodome