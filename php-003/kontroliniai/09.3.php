<?php
/*
Panaudodami prieš tai sukurtą klasę "preke", sukurkite klases "vaikams" ir "studentams", kurios paveldi "preke" klasę. "preke" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”. "vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”. vaikams‐ tiesiog paprastas žodis. "studentams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (studentams)”. studentams‐ tiesiog paprastas žodis. "vaikams" ir "studentams" klasių metodas info turi turėti parametrą "nuolaida" (procentais), kurio pagalba būtų perskaičiuojama prekės kaina išvedimo metu. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/
class preke {
    public $kodas, $pavadinimas, $kaina;
    function __construct($ko, $pa, $ka){
        $this->kodas = $ko;
        $this->pavadinimas = $pa;
        $this->kaina = $ka;
    }
    function info($nuolaida = 0){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->kodas, $this->pavadinimas,$this->kaina);
    }
}
class vaikams extends preke{
    function info($nuolaida = 0){
        $s = "%s, %s, %s (vaikams)";
        echo sprintf($s, $this->kodas, $this->pavadinimas,($this->kaina * (100 - $nuolaida))/100);
    }
}
class studentams extends preke{
    function info($nuolaida = 0){
        $s = "%s, %s, %s (studentams)";
        echo sprintf($s, $this->kodas, $this->pavadinimas,($this->kaina * (100 - $nuolaida))/100);
    }
}
$o = new preke('001', 'Gėrimas', 1);
$o->info(); echo '<br>';
$o = new vaikams('001', 'Gėrimas', 1);
$o->info(20); echo '<br>';
$o = new studentams('001', 'Gėrimas', 1);
$o->info(10);