<?php

class zmogus {
    public $vardas;
    public $pavarde;
    public $amzius;
    function __construct($v, $p, $a){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = $a;
    }
    static function keisti($s){
        return ucfirst(strtolower($s));
    }
    function keisti2($s){
        return self::keisti($s);
    }
}

class mokinys extends zmogus {
    function keisti2($s){
        return strtoupper($s) . ' ' . parent::keisti2($s);
    }
}

echo zmogus::keisti('tOmas') . '<br>';
//echo zmogus::keisti2('tOmas') . '<br>';
$z = new zmogus('jonas', 'jonaitis', 25);
echo $z->keisti2('tOmas') . '<br>';
$m = new mokinys('antanas', 'jonaitis', 25);
echo $m->keisti2('tOmas') . '<br>';
