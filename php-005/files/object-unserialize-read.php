<?php

$o = unserialize(file_get_contents('object-serialize.txt'));
var_dump($o);
$s = "aaa\nbbb";
$ar = explode("\n", $s);
var_dump($ar);