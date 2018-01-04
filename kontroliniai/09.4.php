<?php
/*
Sukurkite klasę diagnostika. Klasės savybė - $duomenys - asociatyvimis masyvas, kuriame yra diagnostikos pranesimai apie klaidas: raktas => tekstas (angliškas). Padaryti funkcija, kuri pagal kodą (funkcijos parametras) gražina klaidos pranešimo tekstą. Sukurti lituanizuotą diagnostikos klasę diagnostika_lt, kuri paveldi klasę diagonostika ir turi kitą diagnostikos pranešimų masyvą (pakeičiantį originalą), kur kodai yra tie patys, o tekstai - lietuviški. Išbandyti abi klases kreipiantis į funkciją tuo pačiu kodu. Jeigu kodo masyve nėra, tai reikia gražinti pranešimą "Code not found" ("Kodas nerastas")
*/

class diagnostika {
    public $duomenys = [
        'K01' => 'Engine failure',
        'K02' => 'Brake failure',
        'K03' => 'Electronic failure'
    ];
    function report($code){
        if (isset($this->duomenys[$code])) return $this->duomenys[$code];
        else return 'Code does not found';
    }
}

$o = new diagnostika();
echo $o->report('K02') . '<br>';
echo $o->report('K99') . '<br>';

class diagnostika_lt extends diagnostika {
    public $duomenys = [
        'K01' => 'Variklio trikis',
        'K02' => 'Stabdžių trikis',
        'K03' => 'Elektronikos trikis'
    ];
}
$o = new diagnostika_lt();
echo $o->report('K02') . '<br>';
echo $o->report('K99') . '<br>';