<?php

$a = '6' == 6;
var_dump($a);

$a = '6' === 6;
var_dump($a);

$a = 6 === 6;

$a = true == 1;

var_dump($a);

$a = 'a' != 'b';
var_dump($a);

$a = 1;
echo ++$a . "<br>";
echo $a++ . "<br>";
echo $a . "<br>";

$x = 5; $y = 10;

$a = $x == 5 && $y <10;
var_dump($a);

$a = $x == 5 && $y >=10;
var_dump($a);

$a = $x == 5 || $y <10;
var_dump($a);

$a = $x == 5 && !($y <10);
var_dump($a);

$x = 5; $y = 10;
$a = ($x == 5 xor $y == 10);
var_dump($a);