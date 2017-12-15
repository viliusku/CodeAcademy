<?php

$a = array(1,2,'labas');
var_dump($a);

$a = [1,2,'labas'];
var_dump($a);

// asociatyviniai
$b = [0 => 0, 'a' => 1, 'b' => '2', 'c' => [0,1,2,3]];
var_dump($b);

echo $b['a'] . '<br>';
$i = 0;
echo $b[(string)$i] . '<br>';

echo count($b)."<br>";
echo count($b['c'])."<br>";

unset($b['a']);
var_dump($b);
$b['aaa'] = 'kaunas';
var_dump($b);

$a[] = 'vilnius';
$a[count($a)] = 'marijampole';
var_dump($a);

