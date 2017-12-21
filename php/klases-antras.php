<?php

class zmogus {
    const copy = 'CodeAcademy';
    const aaa = 'bbb';
    public $vardas;
    public $pavarde;
    public $amzius;
    private $sablonas = 'Vardas: %s, pavarde: %s, amzius: %s';
    function __construct($v, $p, $a = 'nezinomas'){
       $this->vardas = $this->pakeisti($v);
       $this->pavarde = $this->pakeisti($p);
       $this->amzius = $a;
    }
    protected function pakeisti($s){
        return ucfirst(strtolower($s));
    }
    public function eilute(){
        return zmogus::copy . ': ' .sprintf($this->sablonas, $this->vardas, $this->pavarde, $this->amzius);
    }
}

$z = new zmogus('Jonas', 'jonaitis', 25);

echo $z->vardas . '<br>';
//echo $z->sablonas . '<br>'; // klaida
echo $z->eilute() . '<br>';
//echo $z->pakeisti('jonas') . '<br>'; // klaida
define('aaa', 'labas');
echo aaa . '<br>';

echo zmogus::copy . '<br>';

class mokinys extends zmogus {
    public $pazymys;
    function __construct($v, $p, $a, $pa){
        $this->vardas = $this->pakeisti($v);
        $this->pavarde = $this->pakeisti($p);
        $this->amzius = $a;
        $this->pazymys = $pa;
    }
}

$mo = new mokinys('Petras', 'petraitis', 21, 10);
var_dump($mo);
echo mokinys::copy . '<br>';
echo $mo->eilute() . '<br>';