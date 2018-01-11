<?php

$tekstas = "Labas rytas";

// substr()
echo substr($tekstas, 0, 3);
echo "<br>";
echo substr($tekstas,3,2);
echo "<br>";
echo substr($tekstas, 5);
echo "<br>";

//str_replace()
$a = str_replace('rytas', 'vakaras', $tekstas);
echo $a;
echo '<br>';

//strpos
echo strpos($tekstas, 'ba');
echo '<br>';

// in_array()
$sarasas = ['aaa', 'bbb', 'ccc'];
if (in_array('xxx', $sarasas)) echo "true"; else echo 'false';
echo '<br>';
if (in_array('ccc', $sarasas)) echo "true"; else echo 'false';

// in_merge()
$b = array_merge($sarasas, ['xxx', 'yyy']);
var_dump($b);

// array_splice
array_splice($b, 2, 2);
var_dump($b);

// date(), time()
echo date("Y-m-d H:m:s");
echo '<br>';
echo time();
echo '<br>';
echo uniqid();
echo '<br>';

// die, exit
//@fopen('abra', 'r') or die('abra nerastas');
//@fopen('kadabra', 'r') or exit('kadabra nerastas');

// regex
if (preg_match("/^.a.{2}s/", $tekstas)) echo 'rasta'; else echo 'nerasta';
echo '<br>';

$tekstas = "kaina yra 10 usd";

echo preg_replace("/^([^0-9]+)(\d+)([^0-9]+)$/", "$1$2 eur", $tekstas);
