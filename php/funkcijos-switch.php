<?php

function spalvos_kodas($spalva){
    switch($spalva){
        case 'raudona': $kodas = 'red'; break;
        case 'geltonas': $kodas = 'yellow'; break;
        case 'tamsus': $kodas = '#222222'; break;
        default: $kodas = 'black';
    }
    return $kodas;
}

echo '<p style="color:' . spalvos_kodas('raudona') . '">labas</p>';

// <p style="color: red">labas</p>