<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus du parametrus ‐ skaičius, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kvadratų sumą padaugintą iš pi.
*/

function f($a, $b){
    return ($a**2 + $b**2) * pi();
}

echo f(5, 22);