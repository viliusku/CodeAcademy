<?php

class a {
    public $x = 5;
}

$u = new a();
$u->y = 100;
var_dump($u);

$v = new stdClass();
$v->x = 7;
$v->y = 150;
var_dump($v);

$s = '{"a": 8}';
$o = json_decode($s, false);
echo $o->a;