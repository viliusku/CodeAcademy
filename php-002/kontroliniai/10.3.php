<?php
/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis. Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km). Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas). Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį. Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/

class automobiliai { // automobiliu klases aprašas
    public $sarasas; // savybė kur bus talpinamas automobiliu masyvas
    function automobilis($gamintojas, $modelis, $kuras, $sanaudos){ // funkcija automobilio patalpinimui sarase (savybėje)
        if (!isset($this->sarasas)) $this->v = []; // jeigu savybė (masyvas) dar nepanaudotas priskiriame tuščia paprastą masyvą
        $this->sarasas[] = [ // sukuriame automobilio asociatyvinį masyvą ir patalpiname savybėje (masyve)
            'gam' => $gamintojas,
            'mod' => $modelis,
            'kur' => $kuras,
            'san' => $sanaudos
        ];
    }
    function kurovidurkisDyzelis(){ // funkcija apskaiciuoti dyzeliniu masinu kuro sanaudu vidurki
        $sum = 0; // pradzioje suma = 0
        $kiek = 0; // pradzioje kiekis = 0
        for ($i=0; $i<count($this->sarasas); $i++){ // imame automobilius po vieną iš masyvo
            if ($this->sarasas[$i]['kur'] == 'dyzelis') { // jeigu dyzelis,
                $kiek++; // +1 dyzelinis automobilis
                $sum += $this->sarasas[$i]['san']; // + kuro sanaudos
            }
        }
        return $sum / $kiek; // gražiname dyzeliniu masinu kuro sanaudu vidurki kaip funkcijos rezultatą
    }
    function kurovidurkisBenzinas(){ // funkcija apskaiciuoti benzininiu masinu kuro sanaudu vidurki
        $sum = 0; // pradzioje suma = 0
        $kiek = 0; // pradzioje kiekis = 0
        for ($i=0; $i<count($this->sarasas); $i++){ // imame automobilius po vieną iš masyvo
            if ($this->sarasas[$i]['kur'] == 'benzinas') { // jeigu benzinas,
                $kiek++; // +1 benzininis automobilis
                $sum += $this->sarasas[$i]['san']; // + kuro sanaudos
            }
        }
        return $sum / $kiek; // gražiname benzininiu masinu kuro sanaudu vidurki kaip funkcijos rezultatą
    }

}

$objektas = new automobiliai(); // sukuriame klasės objekto egzempliorių

$objektas->automobilis('Honda', 'Civic', 'benzinas', 8); // įdedame automobili
$objektas->automobilis('Bmw', '320', 'benzinas', 12); // įdedame automobili
$objektas->automobilis('VW', 'Passat', 'dyzelis', 6); // įdedame automobili
$objektas->automobilis('Mercedes', 'CLK', 'dyzelis', 10); // įdedame automobili


echo $objektas->kurovidurkisDyzelis(); // suskaiciuojame dyzeliniu masinu kuro sanaudu vidurki ir parodome
echo '<br>';
echo $objektas->kurovidurkisBenzinas(); // // suskaiciuojame benzininiu masinu kuro sanaudu vidurki ir parodome