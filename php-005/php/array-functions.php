<?php

$m = [1, 7, 5];

if (in_array(8, $m)) echo '8 yra';
else echo '8 nera';
echo '<br>';

if (in_array(5, $m)) echo '5 yra';
else echo '5 nera';
var_dump($m);
sort($m);
var_dump($m);
rsort($m);
var_dump($m);
shuffle($m);
var_dump($m);

$masinos = [
    [
        'gamintojas' => 'Honda',
        'modelis' => 'Civic',
        'kaina' => 1500
    ] ,
    [
        'gamintojas' => 'BMW',
        'modelis' => '320i',
        'kaina' => 2000
    ],
    [
        'gamintojas' => 'Audi',
        'modelis' => '100',
        'kaina' => 500
    ]
];

usort($masinos, function($a, $b){
    if ($a['kaina'] > $b['kaina']) return 1;
    elseif ($a['kaina'] < $b['kaina']) return -1;
    else return 0;
});

var_dump($masinos);

usort($masinos, function($a, $b){
    if ($a['kaina'] > $b['kaina']) return -1;
    elseif ($a['kaina'] < $b['kaina']) return 1;
    else return 0;
});

var_dump($masinos);

$m = [1,3,4,1,3];
$x = array_unique($m);
var_dump($x);
$m1 = [1,2,3];
$m2 = [5,6,7];
$m3 = [4,8,9];
$m = array_merge($m1, $m2, $m3);
sort($m);
var_dump($m);
$m1 = [1,3,5,7];
$m2 = [0,1,3,9];
$m = array_intersect($m1, $m2);
var_dump($m);
echo array_sum($m);
$m = [1,2,3,4,5,6,7,8,9,10];
$x = array_filter($m, function($e){
   if ($e % 2 == 0) return false;
   else return true;
});
var_dump($x);
$y = array_map(function($e){
    return $e**2;
}, $x);
var_dump($y);