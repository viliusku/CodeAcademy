<?php

$abc = 2; // cia yra kintamasis
/* cia yra isvedimas i browserio langa */
echo $abc . ' xxx ' . '<br>';
$b = 5;
echo $b . '<br>';

$c = $abc + $b;
echo $c . '<br>';

$d = $abc * $b;
echo $d . '<br>';

echo $d / 3;
echo '<br>';
echo 10 % 3;
echo '<br>';
echo 5 ** 2;
echo '<br>';

$x = 1;
$x += 2;
echo $x;
$x++;
echo '<br>';
echo $x;
$x--;
echo '<br>';
echo $x;

$z = $x++;
echo '<br>';
echo $z;
echo '<br>';

echo 1.2e-2 . '<br>';
echo 'abcdef<br>';
echo "bcdef<br>";
echo "\x61bcdef";

$a1 = 'labas';
$b1 = 'rytas';
echo '<br>';
echo $a1     .' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $b1;

echo '<br>';
echo "xxx=$z";
echo '<br>';
echo 'xxx=$z';
echo '<br>';
echo "xxx={$z}";