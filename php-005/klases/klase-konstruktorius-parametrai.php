<?php

class auto {
    public $automobilis = [];
    function __construct($gam, $mod, $metai, $kaina){
        $this->automobilis = [
          'gamintojas' => $gam,
          'modelis' => $mod,
          'metai' => $metai,
          'kaina' => $kaina
        ];
    }
    function info(){
        $s = "Gamintojas: %s, modelis:  %s, metai: %s, kaina: %s EUR";
        echo sprintf($s, $this->automobilis['gamintojas'],$this->automobilis['modelis'],$this->automobilis['metai'],$this->automobilis['kaina']);
    }
}

$o = new auto('Honda', 'Civic', 2010, 3000);
var_dump($o);
$o->info();