<?php
/**
Sukurti klasę studentas, su savybe egzaminai. Sukurti kontruktorių, kurio pagalba būtų galima įdėti sudento duomenis į savybes: vardas, pavarde, fakultetas, kursas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzamino rezultatus: dalykas, įvertinimas (dešimtbalėje sistemoje). Sukurti metodą su parametru, kuris išveda: vardas, pavardė, fakultetas, kursas, išlaikytų egzaminų: skaičius, neišlaikytų egzaminų: skaičius. Skaičius - suskaičiuotas išlaikytų/neišlaikytų egzaminų skaičiai. Išlaikytu egzaminas skaitomas tada, kai įvertinimas yra >= 5.
 */

class studentas {
    public $va, $pa, $fa, $ku;
    public $egzaminai = [];
    function __construct($va, $pa, $fa, $ku){
        $this->va = $va;
        $this->pa = $pa;
        $this->fa = $fa;
        $this->ku = $ku;
    }
    function egz($da, $iv){
        $this->egzaminai[] = [
          'da' => $da,
          'iv' => $iv
        ];
    }
    function info(){
        $t = 0; $n = 0;
        foreach($this->egzaminai as $egz){
            if ($egz['iv']>=5) $t++; else $n++;
        }
        $s = "%s, %s, %s, %s, išlaikytų egzaminų: %s, neišlaikytų egzaminų: %s.";
        echo sprintf($s, $this->va, $this->pa, $this->fa, $this->ku, $t, $n);
    }
}

$o = new studentas('Jonas', 'Jonaitis', 'IF', 1);
$o->egz('Matematika', 8);
$o->egz('Fizika', 7);
$o->egz('Programavimas', 10);
$o->egz('Istorija', 5);
$o->egz('Filosofija', 4);

$o->info();