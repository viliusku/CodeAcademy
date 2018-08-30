<?php

class auto {
    public $gamintojas, $modelis, $metai, $kaina, $bukle;
    function __construct($ga, $mo, $me, $ka, $bu){
        $this->gamintojas = $ga;
        $this->modelis = $mo;
        $this->metai = $me;
        $this->kaina = $ka;
        $this->bukle = $bu;
    }
}

$o = new auto($_POST['gam'], $_POST['mod'], $_POST['met'], $_POST['kai'], $_POST['buk']);

var_dump($o);