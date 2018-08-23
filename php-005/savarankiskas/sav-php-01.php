<?php
/**
Yra masyvas su vardais; I6vesti visus vardus, kurių teksto ilgis >= 5;
 */

$m = ['Antanas', 'Petras', 'Ona'];

foreach($m as $v){
    if (strlen($v)>=5) echo $v . ' ';
}