<?php

$s = "rlabas rytas";

echo strstr($s, 'bas') . '<br>';
echo strpos($s, 'rytas') . '<br>';

$string = "This is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}

$s = " labas ";
echo "'" . trim($s) . "'<br>";
echo "'" . ltrim($s) . "'<br>";
echo "'" . rtrim($s) . "'<br>";
$x = "Ąžuolas";
echo strlen($x) . '<br>';
echo mb_strlen($x, 'utf-8') . '<br>';