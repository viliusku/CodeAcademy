<?php

$m = [
  'gamintojas' => 'Honda',
  'modelis' => 'Civic',
  'metai' => 2002,
  'kaina' => 2000,
];

var_dump($m);
echo $m['metai'];
$m['spalva'] = 'raudona';
var_dump($m);

$m['kaina'] = 3000;
var_dump($m);

unset($m['metai']);
var_dump($m);
echo count($m);