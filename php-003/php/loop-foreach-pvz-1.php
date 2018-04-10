<?php

$m = [1, 2, 6, 8, 0];

$suma = 0;
foreach($m as $sk){
    //$suma = $suma + $sk;
    $suma += $sk;
}
echo $suma / count($m);