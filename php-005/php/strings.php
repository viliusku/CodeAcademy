<?php

$x = 5;

$s = 'laba$xs';
$o = "ry\"ta{$x} s";

echo $s . ' ' . $o;
echo '<br>';
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

echo $str .'<br>';
echo strlen($str) . '<br>';

$s = "labas rytas stai ir as";
$m = explode(' ', $s);
var_dump($m);
echo '<br>';
shuffle($m);
$s = implode(' ', $m);

$s = addslashes('a"b"c');
var_dump($s);

echo md5('labas rytas stai ir as aaa');
echo '<br>';
echo uniqid();
echo '<br>';
$s = "%s yra labai geras %s modelis, kurio kaina yra %s";
$x = sprintf($s, "Passat", "VW", 2000);
echo $x . "<br>";
printf($s, "Passat", "VW", 2000);
echo "<br>";
$s = "   labas rytas    ";
echo "*" . $s . "*";
echo "<br>";
echo "*" . trim($s) . "*";
echo "<br>";
echo strcmp("abc", "abd");
echo "<br>";
echo strpos("labas rytas", "ry");
echo "<br>";
echo strtoupper("labas rytas");
echo "<br>";
echo ucfirst(strtolower("lABas rYTas"));
echo "<br>";
echo ucwords(strtolower("lABas rYTas"));
$s = "<b><u>Labas rytas</u></b>";
echo "<br>";
echo $s;
echo "<br>";
$x = htmlspecialchars($s);
echo $x;
echo "<br>";
echo htmlspecialchars_decode($x);
echo "<br>";
$s = "labas rytas";
echo substr($s, 6, 3);
