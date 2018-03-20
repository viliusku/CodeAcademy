<?php

$kaininkas = [
  'pro' => 300,
  'atm' => 100,
  'hdd' => 200
];

$s = 0;
foreach($_POST as $key => $value){
    if (isset($kaininkas[$key])) $s += $kaininkas[$key];
}

echo json_encode($s);