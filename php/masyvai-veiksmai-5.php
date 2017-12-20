<?php

$m = ['bmw', 'audi', 'honda'];

$tekstas = 'aaa';

$ma = ['bmw' => "raudona", 'audi' => 'balta', 'honda' => 'juoda'];

echo $m[0] . '<br>';
echo $ma['bmw'] . '<br>';

$mx = ['bmw' => ['raudona', 'melyna', 'zalia'], 'audi' => 'balta', 'honda' => 'juoda'];
echo $mx['bmw'][0] . ' '. $mx['bmw'][1] . '<br>';
echo implode(' *** ', $mx['bmw']) . '<br>';

$ma['lada'] = 'geltona';
echo json_encode($ma) . "<br>";

unset($ma['bmw']);
echo json_encode($ma) . "<br>";

$my = ['bmw' => "raudona", 'audi' => 'balta', 'honda' => 'juoda'];
sort($my);
echo json_encode($my) . "<br>";

$mz = ['bmw' => "raudona", 'audi' => 'balta', 'honda' => 'juoda'];
ksort($mz);
echo json_encode($mz) . "<br>";
$a = ['a', 'x', 'z'];
$b = ['c', 'm'];
$c = array_merge($a, $b);
print_r($c);
sort($c);
print_r($c);
echo '<br>' . json_encode($c);

$aa = ['bmw' => "raudona", 'audi' => 'balta', 'honda' => 'juoda'];
$bb = ['toyota' => 'zalia', 'lada' => 'melyna'];
$cc = array_merge($aa, $bb);
echo '<br>' . json_encode($cc);
ksort($cc);
echo '<br>' . json_encode($cc);

function test($ma, $key){
    if (isset($ma[$key])) echo '<br>yra'; else echo '<br>nera';
}

test($cc, 'honda');
test($cc, 'kia');

echo '<br>' . $cc['honda'] . '<br>';
// -----
$s = "Labas %s %s. Sveiki atvyke";
echo sprintf($s, 'jonas', 'jonaitis');
