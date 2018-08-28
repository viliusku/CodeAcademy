<?php
/**
Sukurti funkciją, kuri perduotą į funkciją masyvą su tekstais pakeičia visus simbolius į mažąsias raides ir gražina masyvą kaip rezultatą. Pademonstruoti veikimą.
 */

$m = ['Ghghff', 'KJKJKJg', 'ASFFGF'];

function cnv($mas){
    for ($i=0; $i<count($mas); $i++){
        $mas[$i] = strtolower($mas[$i]);
    }
    return $mas;
}

var_dump(cnv($m));