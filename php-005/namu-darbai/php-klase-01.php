<?php
/**
Sukurti klasę, kurioje yra savybė masyvas su asmenimis, kur kiekvienas asmuo yra asociatyvins masyvas: vardas, lytis. Sukurti dvi funkcijas, kurios paskaičiuotų kiek yra moterų ir kiek yra vyrų ir gražintų reikšmes. Pademonstruoti veikimą.
 */

class abc {
    public $mas = [
        ['vardas' => 'Jonas', 'lytis' => 'vyras'],
        ['vardas' => 'Petras', 'lytis' => 'vyras'],
        ['vardas' => 'Antanas', 'lytis' => 'vyras'],
        ['vardas' => 'Marytė', 'lytis' => 'moteris'],
        ['vardas' => 'Auksė', 'lytis' => 'moteris'],
        ['vardas' => 'Elena', 'lytis' => 'moteris']
    ];

    function moteru()
    {
        $s = 0;
        foreach ($this->mas as $z) {
            if ($z['lytis'] == 'moteris') $s++;
        }
        return $s;
    }

    function vyru()
    {
        $s = 0;
        foreach ($this->mas as $z) {
            if ($z['lytis'] == 'vyras') $s++;
        }
        return $s;
    }
}
$o = new abc();
echo sprintf("Vyrų: %s, moterų: %s", $o->vyru(), $o->moteru());

//echo "Vyrų: " . $o->vyru() . ", moterų: " . $o->moteru();