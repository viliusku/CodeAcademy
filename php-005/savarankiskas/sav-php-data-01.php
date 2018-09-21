<?php
/*
 Sukurti funkciją, kuri išveda visas išeigines dienas (datas) per nurodytą mėnesį (funkcijos parametrai - metai, mėnuo). Išeiginės dienos: šeštadienis ir sekmadienis.
 */

function iseigines($year, $month){
    $data = new DateTime();
    $data->setDate($year, $month, 1);
    do {
        $w = $data->format("w");
        $m = $data->format("m");
        if ($w == 0 || $w == 6){
            echo $data->format("Y-m-d") . '<br>';
        }
        $data->add(new DateInterval('P1D'));
    }
    while ($m == $month);
}

iseigines(2018, 9);