<?php

$m = [1,3,6,2,10,12,44];

function vidurkis($mas){
    $sum = 0;
    for ($i=0; $i<count($mas); $i++) $sum += $mas[$i];
    return $sum / count($mas);
}

echo vidurkis($m) . '<br>';

function prideti($mas, $skaicius){
    for ($i=0; $i<count($mas); $i++) $mas[$i] = $mas[$i] + $skaicius;
    return $mas;
}

echo json_encode(prideti($m, 1)); echo '<br>';

$m2 = [15, 3, 10, 20, 2, 0, 5];

function didziausias($mm){
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)) {
            if ($mm[$i] > $d) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}

echo didziausias($m2) . '<br>';

function maziausias($mm){
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)) {
            if ($mm[$i] < $d && $mm[$i] > 0) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}

echo maziausias($m2) . '<br>';