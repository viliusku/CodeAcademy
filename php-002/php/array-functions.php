<?php
$m = [1,3,5,10];
var_dump(in_array(5, $m)); echo '<br>';
var_dump(in_array(2, $m)); echo '<br>';
list($a, $b) = $m;
echo $a . ' ' . $b . '<br>';
$s = 'ccc aaa ddd bbb';
$m = explode(' ', $s);
var_dump($m); echo '<br>';
sort($m);
var_dump($m); echo '<br>';
echo implode(' ', $m) . '<br>';
$m1 = [1,3,5,10];
$m2 = [1,2,7];
$m3 = array_merge($m1, $m2);
echo json_encode($m3) . '<br>';
$m4 = array_unique($m3);
echo json_encode($m4) . '<br>';
shuffle($m3);
echo json_encode($m3) . '<br>';
echo json_encode(array_diff([1,2,3,4], [1,2,3,5])) . '<br>';
$m = ['a' => 'bbb', 'b' => 'aaa', 'c' => 'ddd'];
echo json_encode(array_keys($m)) . '<br>';
echo json_encode(array_values($m)) . '<br>';
echo json_encode(array_intersect([1,2,7,4], [1,2,3,5])) . '<br>';

function fnc($v){
    return($v**2);
}
$m = [1,2,3,4,5];
echo json_encode(array_map("fnc", $m)) . '<br>';

echo json_encode(array_map(function($p){
    return $p**2;
}, $m)) . '<br>';

$m = [
    ['vardas' => 'Jonas', 'amzius' => 30],
    ['vardas' => 'Petras', 'amzius' => 25],
    ['vardas' => 'Antanas', 'amzius' => 31]
];
usort($m, function($a, $b){
    if($a['amzius'] == $b['amzius']) return 0;
    elseif ($a['amzius'] > $b['amzius']) return -1;
    else return 1;
});
echo json_encode($m) . '<br>';

usort($m, function($a, $b){
    return strcmp($a['vardas'], $b['vardas']);
});
echo json_encode($m) . '<br>';

