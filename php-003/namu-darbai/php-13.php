<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 5 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidėmis.
 */
$m = ['aaa', 'bbb', 'ccc', 'ddd', 'eee'];
$i = 0;
foreach($m as $tekstas){
    $m[$i++] = strtoupper($tekstas);
}
var_dump($m);