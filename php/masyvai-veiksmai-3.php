<?php

$m = ['labas', 'rytAS', '...kaunas##','jonas jonAITIS'];

function mazosios($s){
    $x = strtolower($s);
    $x = rtrim(ltrim($x, '.'), '#');
    return $x;
}

$nm = [];
$nmd = [];
$nmp = [];
$nml = [];
$nmx = [];
$nms = [];
for ($i=0; $i<count($m); $i++) {
    $s = mazosios($m[$i]);
    //$nm[] = ucfirst($s);
    $nm[] = ucwords($s);
    $nmd[] = strtoupper($s);
    $nmp[] = str_replace('a', '*', $s);
    $nml[] = $s . '-' .  strlen($s);
    $nmx[] = $s . '-' .  strpos($s, 'a');
    $nms[] = str_shuffle($s);
}
echo json_encode($nm) .'<br>';
echo json_encode($nmd) .'<br>';
echo json_encode($nmp) .'<br>';
echo json_encode($nml) .'<br>';
echo json_encode($nmx) .'<br>';
echo json_encode($nms) .'<br>';

