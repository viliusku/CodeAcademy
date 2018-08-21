<?php
/**
Sukurti klasę ir metodą - valiutos konverterį į EUR. Funkcijos parametrai: pinigai, valiuta. Turime sąrašą, kuriame yra pinigai (asociatyvinis masyvas): kiekis, valiuta. Padaryti naują masyvą, kuriame yra skaičiai (pinigai paversti i EUR). Išvesti su var_dump.
 */

class pinigai {

    function konv($kiek, $val){
        $eur = 0;
        switch ($val){
            case 'usd': $eur = $kiek / 1.15; break;
            case 'gbp': $eur = $kiek / 0.89; break;
            default: $eur = false;
        }
        return $eur;
    }

}

$m = [
  ['val' => 'usd', 'kiek' => 85],
    ['val' => 'gbp', 'kiek' => 55],
    ['val' => 'lir', 'kiek' => 20]
];

$o = new pinigai();
$mm = [];

foreach($m as $pinigas){
    $mm[] = $o->konv($pinigas['kiek'], $pinigas['val']);
}
var_dump($mm);