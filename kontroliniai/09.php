<?php
/*
Panaudodami prieš tai sukurtą klasę person, sukurkite klases staff ir client, kurios paveldi person klasę. Person klasę papildykite metodu “asmendDuomenys”, kuris išvestų suformatuotą eilutę “Vardas Pavardė (amžius)”. Staff klasėje perrašykite metodą asmensDuomenys, pakeisdami išvedamą eilutę į “Pavardė Vardas, darbuotojas”. Darbuotojas ‐ tiesiog paprastas žodis.
*/

class person { // person klasės aprašas
    // klases savybės
    public $name;
    public $surname;
    public $age;
    function __construct($nam, $sur, $age){ // klasės konstruktorius, kuri padeda tris parametrus į savo savybes
        $this->name = $nam;
        $this->surname = $sur;
        $this->age = $age;
    }
    function asmensDuomenys(){ // metodas (funkcija), kuris išveda suformatuotą eilutę
        $sablonas = "%s %s (%s)"; // šablonas
        echo sprintf($sablonas, $this->name, $this->surname, $this->age); // formatuojama eilutė ir išvedama
    }
}

class staff extends person { // klasė staff paveldi person klasę
    function asmensDuomenys(){ // perrasome metodą asmensDuomenys
        $sablonas = "%s %s (%s)";
        echo sprintf($sablonas, $this->name, $this->surname, $this->age);
    }
}

class client extends person { // klasė client paveldi person klasę
}

// tikriname person klasę
$p = new staff('Vardenis', 'Pavardenis', 25); // sukuriame person klasės objekto egzempliorių
$p->asmensDuomenys(); // išvedame formatuotą eilutę

echo '<br>';
// tikriname staff klasę
$p = new staff('Jonas', 'Jonaitis', 27); // sukuriame staff klasės objekto egzempliorių
$p->asmensDuomenys(); // išvedame formatuotą eilutę

echo '<br>';
// tikriname client klasę
$p = new client('Petras', 'Petraitis', 30); // sukuriame client klasės objekto egzempliorių
$p->asmensDuomenys(); // išvedame formatuotą eilutę