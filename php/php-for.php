<?php

$masyvas = ['bmw', 'audi', 'honda', 'jaguar'];

for ($i = 0; $i<count($masyvas); $i++){
    $masina = $masyvas[$i];
    echo ($i + 1) . '. ' . $masina . '<br>';
}

$ii = 1;
foreach($masyvas as $masina){
    echo $ii++ . '. ' . $masina . '<br>';
}
