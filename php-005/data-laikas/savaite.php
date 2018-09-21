<?php

$data = new DateTime();
for ($i=0; $i<7; $i++){
    echo $data->format("Y-m-d") . ', week day no: ' . $data->format("w") .', week day: ' . $data->format("D") . '<br>';
    $data->add(new DateInterval('P1D'));
}