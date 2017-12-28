<?php
/*
Sukurti klase turgus. Sukurti funkcija atomobilis, su kuria butu galima pateikti automobili i turgu. Funkcijos parametrai: gamintojas, modelis, metai, kaina. Automobiliu informacija talpinti i klases savybe automobiliai (masyvas). Sukurti funkcija minKaina, kuri surastu automobili su maziausia kaina.
*/

class turgus {
    public $automobiliai;
    function automobilis($gamintojas, $modelis, $metai, $kaina){
        if (!isset($this->automobiliai)) $this->automobiliai = [];
        $this->automobiliai[] = [
            'ga' => $gamintojas,
            'mo' => $modelis,
            'ka' => $kaina,
            'me' => $metai
        ];
    }
    function minKaina(){
        $min = $this->automobiliai[0]['ka'];
        for ($i=0; $i<count($this->automobiliai); $i++){
            if ($this->automobiliai[$i]['ka'] < $min) $min = $this->automobiliai[$i]['ka'];
        }
        return $min;
    }
    function maxKaina(){
        $max = $this->automobiliai[0]['ka'];
        for ($i=0; $i<count($this->automobiliai); $i++){
            if ($this->automobiliai[$i]['ka'] > $max) $max = $this->automobiliai[$i]['ka'];
        }
        return $max;
    }
}

$objektas = new turgus();

$objektas->automobilis('bmw', '320', 2000, 4000);
$objektas->automobilis('honda', 'accord', 2005, 3500);
$objektas->automobilis('audi', '100', 1990, 3000);
$objektas->automobilis('lada', 'super', 2015, 10000);

echo $objektas->minKaina();
echo '<br>';
echo $objektas->maxKaina();