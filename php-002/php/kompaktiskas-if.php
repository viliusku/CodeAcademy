<?php
$a = 2;
if ($a % 2 == 0) echo 'lyginis';
else echo 'nelyginis';
echo '<br>';

echo $a % 2 == 0 ? 'lyginis' : 'nelyginis';

if ($a % 2 == 0) $f = true; else $f = false;
$f = $a % 2 == 0 ? true : false;

$m = [
    'vardas' => 'Jonas',
    'metai' => 30,
    //'lyginis' => $a % 2 == 0 ? true : false
];

if ($a % 2 == 0) $m['lyginis'] = true; else $m['lyginis'] = false;