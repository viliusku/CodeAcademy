<?php
/*
Padaryti klasę personalas. Sukurti funkciją persona. Parametrai: a) vardas, b) pavardė, c) lytis. Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas). Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu. Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
*/

class personalas { // personalo klases aprašas
    public $darbuotojai; // savybė kur bus talpinamas darbuotojų masyvas
    function persona($vardas, $pavarde, $lytis){ // funkcija personos patalpinimui darbuotoju sarase (savybėje)
        if (!isset($this->darbuotojai)) $this->v = []; // jeigu savybė (masyvas) dar nepanaudotas priskiriame tuščia paprastą masyvą
        $this->darbuotojai[] = [ // sukuriame automobilio asociatyvinį masyvą ir patalpiname savybėje (masyve)
            'var' => $vardas,
            'pav' => $pavarde,
            'lyt' => $lytis
        ];
    }
    function kiekMoteru(){ // funkcija apskaiciuoti personalo moteru skaiciu
        $sum = 0; // pradzioje suma = 0
        for ($i=0; $i<count($this->darbuotojai); $i++){ // imame darbuotojus po vieną iš masyvo
            if ($this->darbuotojai[$i]['lyt'] == 'mot') $sum++; // jeigu moteris, tai +1
        }
        return $sum; // gražiname personalo moteru skaiciu kaip funkcijos rezultatą
    }
    function kiekVyru(){ // funkcija apskaiciuoti personalo vyru skaiciu
        $sum = 0; // pradzioje suma = 0
        for ($i=0; $i<count($this->darbuotojai); $i++){ // imame darbuotojus po vieną iš masyvo
            if ($this->darbuotojai[$i]['lyt'] == 'vyr') $sum++; // jeigu vyras, tai +1
        }
        return $sum; // gražiname personalo vyru skaiciu kaip funkcijos rezultatą
    }
}

$objektas = new personalas(); // sukuriame klasės objekto egzempliorių

$objektas->persona('Jonas', 'Jonaitis', 'vyr'); // įdedame persona
$objektas->persona('Petras', 'Petraitis', 'vyr'); // įdedame persona
$objektas->persona('Marija', 'Marijona', 'mot'); // įdedame persona
$objektas->persona('Ona', 'Onaite', 'mot'); // įdedame persona
$objektas->persona('Jonas', 'Jonaitis', 'vyr'); // įdedame persona

echo $objektas->kiekMoteru(); // suskaiciuojame kiek moteru ir parodome
echo '<br>';
echo $objektas->kiekVyru(); // suskaiciuojame kiek vyru ir parodome