<?php

$s = file_get_contents('array.txt');
$m = explode(',', $s);
var_dump($m);