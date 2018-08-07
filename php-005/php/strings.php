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
echo $s;