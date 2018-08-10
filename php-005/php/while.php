<?php
$m = [1,3,5,11,23,15];

$s = 0;
/*
foreach($m as $e){
    $s += $e;
}
for ($i=0; $i < count($m); $i++){
    $s += $m[$i];
}

$i = 0;
while($i < count($m)){
    $s += $m[$i];
    $i++;
}
*/

$i = 0;
do {
    $s += $m[$i];
    $i++;
}
while($i < count($m));

echo round($s / count($m), 2);