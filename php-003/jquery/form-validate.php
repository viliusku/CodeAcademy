<?php

class cla {
    public $vardas, $pavarde, $amzius, $epastas;
    function __construct($v, $p, $a, $e){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = $a;
        $this->epastas = $e;
    }
    function info(){
        $s = "Vardas: %s, pavardė: %s, amžius: %s, el. paštas: %s";
        return sprintf($s, $this->vardas, $this->pavarde, $this->amzius, $this->epastas);
    }
}
$o = new cla($_POST['vardas'], $_POST['pavarde'], $_POST['amzius'], $_POST['epastas']);
$data = $o->info();

echo json_encode($data);