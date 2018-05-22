<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 7 elementų - teksto eilučių. Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą mažosiomis raidėmis.
 */

$m = ['Jonas', 'Petras', 'Antanas', 'Kazys', 'Mindaugas', 'Tomas', 'Marytė'];

$i = 0;
foreach($m as $x){
    $m[$i++] = strtolower($x);
}

var_dump($m);