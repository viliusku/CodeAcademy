<?php
/**
Sukrti klasę auto su savybėmis: gamintojas, modelis, metai, kaina. Sukurti konstruktorių, kurio pagalba būtų galima užpildyti savybes. Sukurti kitą klasę turgus su savybe masinos. Sukurti antrai klasei metodą, kurio pagalba būtų galima perduoti automobilio duomenis, sukurti pagal šiuos duomenis pirmos klasės egzempliorių ir patalpinti į savybę masinos. Sukurti antrai klasei metodą - vidurkis, kuris paskaiciuotu turguje esančių mašinų vidutinę vertę ir gražintų. Pademonstruoti veikimą.
 */

class auto {
    public $gamintojas, $modelis, $metai, $kaina;
    function __construct($ga, $mo, $me, $ka){
        $this->gamintojas = $ga;
        $this->modelis = $mo;
        $this->metai = $me;
        $this->kaina = $ka;
    }
}

class turgus {
    public $masinos = [];
    function ideti($gam, $mod, $met, $kai){
        $this->masinos[] = new auto($gam, $mod, $met, $kai);
    }
    function vidurkis(){
        $s = 0;
        foreach($this->masinos as $masina){
            $s += $masina->kaina;
        }
        return $s / count($this->masinos);
    }
}

$o = new turgus();
$o->ideti('Honda', 'Civic', 2001, 1500);
$o->ideti('BMW', '320i', 2005, 3500);
$o->ideti('VW', 'Golf', 2010, 3000);
$o->ideti('Audi', '100', 1995, 500);
$vidurkis = $o->vidurkis();
echo $vidurkis;
var_dump($o);