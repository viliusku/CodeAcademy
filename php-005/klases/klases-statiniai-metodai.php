<?php

class a {
    static function daug($a, $b){
        return $a * $b;
    }
}

$x = a::daug(2, 3);
echo $x;