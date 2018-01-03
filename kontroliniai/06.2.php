<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus tris parametrus ‐ tekstus, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų simbolių skaičių.
*/

function symbols($a, $b, $c){
    return strlen($a) + strlen($b) + strlen($c);
}

echo symbols('aaa', 'bbb','ccc');