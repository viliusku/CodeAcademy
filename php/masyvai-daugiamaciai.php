<?php

$m = [
  ['bmw', '320i', '2000'],
  ['audi', '100', '1990'],
  ['honda', 'civic', '2005']
];

$x = 3;
$y = 3;

$m[0][2] ='3000' ;

echo '<table>';
for ($i=0; $i<$x; $i++){
    echo '<tr>';
    for ($j=0; $j<$y; $j++){
        echo '<td>' . $m[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';