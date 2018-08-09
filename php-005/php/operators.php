<?php

$a = 10;
$b = 2;

$c = $a + $b; // rezultatas 12
//$c = $c + 5;
$c += 5;

echo $c;
echo "<br>";
$d = $a - $b; // rezultatas 8
$e = $a * $b; // rezultatas 20
$f = $a / $b; // rezultatas 5
echo $a % 3; // rezultatas 1
echo "<br>";
echo $a ** $b; // 100

$q = 6 + 7 - 2 > 100;
var_dump($q);
$a = true;
$b = true;
$c = false;
var_dump($a and $b and $c);
var_dump($a && $b);
var_dump($a || $b || $c);
var_dump($a and $b and !$c);
var_dump($a xor $b);
var_dump($a xor $c);
var_dump($a xor $b xor $c);

$s = 'labas';
$s2 = 'rytas';
$s3 = $s .' '. $s2;
$s3 .= ' stai ir as';
// $s3 = $s3 . ' stai ir as';
echo $s3;