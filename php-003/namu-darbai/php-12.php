<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 3 parametrus ‐ skaičius, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kavdratinių šaknų sumą padaugintą iš pi.
*/

function f($a, $b, $c){
    return (sqrt($a) + sqrt($b) + sqrt($c)) * pi();
}

echo f(2,3,4);