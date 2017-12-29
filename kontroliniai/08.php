<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “person”, kuri turi savybes ‐ name, surname, age. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ name, surname ir age ‐ perduotus parametrus padėtų į savo savybes.
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
}

$p = new person('Vardenis', 'Pavardenis', 25); // sukuriame klasės objekto egzempliorių ir konstruktoriau s pagalba perduodame name, surname ir age
var_export($p); // patikriname kas gavosi
