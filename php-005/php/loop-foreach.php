<?php

$m = [1,3,5,11,23,15];

$s = 0;
foreach($m as $e){
    $s += $e;
}
echo round($s / count($m), 2);
echo '<br>';
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

$s = 0;
foreach($masinos as $e){
    $s += $e['kaina'];
}
echo round($s / count($masinos), 2);

$a = [
  'Jonas' => 1000,
  'Petras' => 2000,
  'Antanas' => 1500
];
echo '<table>';
foreach($a as $key => $val){
    echo '<tr>';
    echo '<td>' . $key . '</td>' . '<td>' . $val . '</td>';
    echo '</tr>';
}
echo '</table>';
