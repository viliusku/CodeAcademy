<?php
/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis. Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km). Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas). Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį. Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/

class automobiliai {
    public $sarasas = [];
    function automobilis($gamintojas, $modelis, $kuras, $sanaudos){
        $this->sarasas[] = [
          'ga' => $gamintojas,
          'mo' => $modelis,
          'ku' => $kuras,
          'sa' => $sanaudos
        ];
    }
    function kurovidurkisDyzelis(){
        $s = 0; $n = 0;
        foreach($this->sarasas as $a){
            if ($a['ku'] == 'Dyzelis'){
                $s += $a['sa'];
                $n++;
            }
        }
        return $s / $n;
    }
    function kurovidurkisBenzinas(){
        $s = 0; $n = 0;
        foreach($this->sarasas as $a){
            if ($a['ku'] == 'Benzinas'){
                $s += $a['sa'];
                $n++;
            }
        }
        return $s / $n;
    }
}
$o = new automobiliai();
$o->automobilis('Honda', 'Civic', 'Benzinas', 6);
$o->automobilis('BMW', '320i', 'Benzinas', 12);
$o->automobilis('Audi', '100', 'Benzinas', 14);
$o->automobilis('VW', 'Passat', 'Dyzelis', 6);
$o->automobilis('VW', 'Golf', 'Dyzelis', 5);
$o->automobilis('BMW', '630', 'Dyzelis', 12);

echo "Benzininių mašinų kuro vidurkis: " . $o->kurovidurkisBenzinas() . ", dyzelinių mašinų kuro vidirkis: " . $o->kurovidurkisDyzelis();