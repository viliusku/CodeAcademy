<?php

function skaiciuoti($ma){ // nevykdo
    $belekas = 0;
    for ($a=0; $a < count($ma); $a++){
        // prasideda vykdymas
        $belekas = $belekas + $ma[$a] * ($a + 1);
        // baigiasi vykdymas
    }
    return $belekas;
}

$m = [2, 5, 6]; // vykdo

$rezultatas = skaiciuoti($m); //vykdo