<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus tris parametrus ‐ tekstus, funkcija turi grąžinti rezultatą ‐ formatuota tekstą. Teksto formatavimui naudokite šabloną.
*/

function format($a, $b, $c){
    $sablonas = "%s - %s - %s";
    return sprintf($sablonas, $a, $b, $c);
}

echo format('aaa', 'bbb', 'ccc');