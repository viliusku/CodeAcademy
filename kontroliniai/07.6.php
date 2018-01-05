<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis skaičių masyvas. Masyvo kas antro elemento reikšmę cikle programiškai pakeiskite į 0.
 */

$m = [1,3,5,-1,7,8,12,44,22];
var_dump($m);
for ($i=0; $i<count($m); $i++){
    if ($i % 2 == 0) $m[$i] = 0;
}
var_dump($m);