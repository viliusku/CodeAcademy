<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 5 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidėmis.
 */

$m = ['vienas','du','trys','keturi','penki']; // vienmatis masyvas iš 5 elementų ‐ teksto eilučių

$i = 0; // masyvo elemento pradinis indeksas = 0
foreach($m as $e){ // foreach ciklas
    $m[$i++] = strtoupper($e); // pakeisti tekstą į didžiąsias raides, pakeisti masyve pagal indesą ir prisėti +1 prie indekso
}

var_dump($m); // pažiūrėti kas gavosi