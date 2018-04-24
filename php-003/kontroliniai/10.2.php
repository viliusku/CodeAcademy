<?php
/*
Padaryti klasę personalas. Sukurti funkciją persona. Parametrai: a) vardas, b) pavardė, c) lytis. Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas). Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu. Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
*/

class personalas {
    public $darbuotojai = [];
    function persona($v, $p, $l){
        $this->darbuotojai[] = [
          'vardas' => $v,
          'pavarde' => $p,
          'lytis' => $l
        ];
    }
    function kiekMoteru(){
        $n = 0;
        foreach($this->darbuotojai as $zmogus){
            if ($zmogus['lytis'] == 'Moteris') $n++;
        }
        return $n;
    }
    function kiekVyru(){
        $n = 0;
        foreach($this->darbuotojai as $zmogus){
            if ($zmogus['lytis'] == 'Vyras') $n++;
        }
        return $n;
    }
}

$o = new personalas();
$o->persona('Jonas', 'Jonaitis', 'Vyras');
$o->persona('Petras', 'Petraitis', 'Vyras');
$o->persona('Agne', 'Jakstaite', 'Moteris');
var_dump($o);
echo 'Moteru yra: ' . $o->kiekMoteru() . '<br>';
echo 'Vyru yra: ' . $o->kiekVyru() . '<br>';