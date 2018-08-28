<?php

class a {
    public $x = 5;
    //final function fnc() - final draudzia paveldejima
    function fnc(){
        echo 'labas';
    }
    protected $u = 15;
}
$o = new a(); var_dump($o);

class b extends a {
    public $x = 10;
    public $y = 10;
    function fnc(){
        echo 'rytas';
    }
    function printu(){
        print($this->u);
    }
}
$o = new b(); var_dump($o);
$o->fnc();
$o->printu();
//echo $o->u; negalima protected
echo $o->x;