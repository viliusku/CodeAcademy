<?php

$m = [
    ['var' => 'Jonas', 'pav' => 'Jonaitis', 'amz' => 35],
    ['var' => 'Petras', 'pav' => 'Petraitis', 'amz' => 40],
    ['var' => 'Antanas', 'pav' => 'Antanaitis', 'amz' => 43]
];

//var_dump($m);
echo '<table>';
echo '<tr><th>Vardas</th><th>Pavarde</th><th>Amzius</th></tr>';
for ($i = 0; $i<count($m); $i++){
   echo '<tr>';
   echo '<td>' . $m[$i]['var'] . '</td>';
    echo '<td>' . $m[$i]['pav'] . '</td>';
    echo '<td>' . $m[$i]['amz'] . '</td>';
   echo '</tr>';
}
echo '</table>';

$n = [
  [1,4,23,56,34],
  [33,47,27,78,46],
  [11,24,45,69,33],
  [23,22,33,44,55],
  [77,88,99,26,8]
];

echo '<table>';
for ($i = 0; $i<count($n); $i++){
    echo '<tr>';
    for ($j=0; $j<count($n[$i]); $j++){
        echo '<td>' . $n[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';