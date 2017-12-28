<?php
/*
Sukurti klasę turgus. Sukurti funkciją atomobilis, su kuria būtų galima pateikti automobilį į turgų. Funkcijos parametrai: gamintojas, modelis, metai, kaina. Automobilių informacijų talpinti į klasės savybę automobiliai (masyvas). Sukurti funkciją minKaina, kuri surastų automobilį su mažiausia kaina.
*/

class turgus { // turgaus klases aprašas
    public $automobiliai; // savybė kur bus talpinamas automobilių masyvas
    function automobilis($gamintojas, $modelis, $metai, $kaina){ // funkcija automobilio patalpinimui truguje (savybėje)
        if (!isset($this->automobiliai)) $this->automobiliai = []; // jeigu savybė (masyvas) dar nepanaudotas priskiriame tuščia paprastą masyvą
        $this->automobiliai[] = [ // sukuriame automobilio asociatyvinį masyvą ir patalpiname savybėje (masyve)
            'ga' => $gamintojas,
            'mo' => $modelis,
            'ka' => $kaina,
            'me' => $metai
        ];
    }
    function minKaina(){ // funkcija parodyti žemiausią automobilio kainą turguje
        $min = $this->automobiliai[0]['ka']; // imame pirmą automobilį masyve ir skaitome kad jo kaina yra mažiausia - įsimename ją
        for ($i=0; $i<count($this->automobiliai); $i++){ // imame automobilius po vieną iš masyvo
            if ($this->automobiliai[$i]['ka'] < $min) $min = $this->automobiliai[$i]['ka']; // jeigu paimto automobilio kainą yra mažesnė už įsimintą - įsimename tą kainą
        }
        return $min; // gražiname surastą žemiausią automobilio kainą kaip funkcijos rezultatą
    }
    function maxKaina(){ // funkcija parodyti didžiausią automobilio kainą turguje
        $max = $this->automobiliai[0]['ka']; // imame pirmą automobilį masyve ir skaitome kad jo kaina yra didžiausią - įsimename ją
        for ($i=0; $i<count($this->automobiliai); $i++){ // imame automobilius po vieną iš masyvo
            if ($this->automobiliai[$i]['ka'] > $max) $max = $this->automobiliai[$i]['ka']; // jeigu paimto automobilio kainą yra didesnė už įsimintą - įsimename tą kainą
        }
        return $max; // gražiname surastą didžiausią automobilio kainą kaip funkcijos rezultatą
    }
}

$objektas = new turgus(); // sukuriame klasės objekto egzempliorių

$objektas->automobilis('bmw', '320', 2000, 4000); // įdedame automobilį
$objektas->automobilis('honda', 'accord', 2005, 3500); // įdedame automobilį
$objektas->automobilis('audi', '100', 1990, 3000); // įdedame automobilį
$objektas->automobilis('lada', 'super', 2015, 10000); // įdedame automobilį

echo $objektas->minKaina(); // surandame žemiausią kainą ir ją parodome
echo '<br>';
echo $objektas->maxKaina(); // surandame didžiausią kainą ir ją parodome