<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 7 elementų - teksto eilučių. Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą mažosiomis raidėmis. Suskaičiuokite kiek yra teksto eilučių, kuriose yra a simbolis.
 */

$m = ['lABas', 'RYtas', 'staI', 'ir', 'AS', 'aBc', 'cde'];

$n = 0;
$i = 0;
foreach($m as $tekstas){
    $m[$i] = strtolower($tekstas);
    if (strchr($m[$i], 'a') !== false) $n++;
    $i++;
}
echo $n;
var_dump($m);
