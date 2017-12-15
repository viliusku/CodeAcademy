<?php

$a = true; // logine reiksme - teisingai
$b = false; // logine reiksme - neteisingai

$c = 6 > 5; // gauname true
$d = 5 > 6; // gauname false
echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";

var_dump($d);
print_r($c);

$f = (bool)1; // tipo cast
var_dump($f);

$int_a = 0x10; // hex dec integer
echo $int_a . "<br>";

$float_a = 1.15e1; // float
echo $float_a . "<br>";

// eilutes (string)

$eil = ' *** ';
$eil_a = 'labas $eil rytas';
echo $eil_a .'<br>';
echo "labas $eil rytas" .'<br>';
echo "labas{$eil}rytas" .'<br>';
echo "labas \x31 rytas" .'<br>';

$aaa = <<<EOT
labas rytas<br>
as atejau
EOT;
echo $aaa .'<br>';

var_dump(array(<<<EOD
foobar!
EOD
));

echo strlen("abcdef") . "<br>";

$bbb = "labas rytas";
$ccc = substr($bbb, 6, 3);
echo $ccc . "<br>";
echo strtoupper($ccc) . "<br>";

$o_1 = new stdClass(); // objekto sukurimas
//$o_2 = new class{}; // objekto sukurimas
$o_3 = (object)[]; // objekto sukurimas
$o_4 = json_decode("{}");

$o_1->tipas = 'automobilis';
$o_1->pavdeze = 'automatine';
$o_1->durys = 4;

var_dump($o_1);

echo $o_1->tipas . ' ' . $o_1->pavdeze . '<br>';
$o_1->{'labas rytas'} = 'aaa';
echo $o_1->{'labas rytas'} ."<br>";

echo $o_1->{'tipas'} . ' ' . $o_1->{'pavdeze'} . '<br>';

