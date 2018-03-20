<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami for ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis, pirmą raidę - didžiąja. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos vertikaliais '|' brūšniais.
*/

$s = "aaa bbb ccc";
$m = explode(' ', $s);
for ($i=0; $i<count($m); $i++){
    $m[$i] = ucfirst(strtolower($m[$i]));
}
$x = implode('|', $m);
echo $x;