<?php
/**
Tekstinio redaktoriaus pagalba sukurti failą su teleloto skaičiais (5 x 5). Parašyto PHP skriptą, kuris nuskaito failą ir išveda ekrane teleloto lentelę (5 x 5).
 */

$f = fopen('php-file-02-2.txt', 'r');
$s = fread($f, filesize('php-file-02-2.txt'));
fclose($f);

$m = explode("\r\n", $s);
for ($i=0; $i<count($m); $i++){
    $m[$i] = explode(' ', $m[$i]);
}
//var_dump($m);

echo '<table>';
foreach($m as $row){
    echo '<tr>';
    foreach($row as $cell){
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
