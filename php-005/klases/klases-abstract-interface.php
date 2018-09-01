<?php

abstract class a {
    abstract function daug($a, $b);
}

class b extends a{
    function daug($a, $b){
        return $a * $b;
    }
}

interface c {
    function daug($a, $b);
}

class d implements c{
    function daug($a, $b){
        return $a * $b;
    }
}

$o = new d();
echo $o->daug(2,2);