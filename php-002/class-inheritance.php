<?php

class a {
    private $x;
    public $y;
    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    /*final*/ function info(){ echo 'a<br>';}
}
class b extends a {
    public $z = 8;
    function info(){ echo 'b<br>';}
    function parentInfo(){parent::info();}
}
$p = new a(1,2);
var_dump($p) . '<br>';
$p->info();

$p = new b(1,2);
var_dump($p) . '<br>';
$p->info();
$p->parentInfo();

