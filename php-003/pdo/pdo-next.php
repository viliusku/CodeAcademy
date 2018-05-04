<?php

$cnn = new PDO('mysql:host=localhost;dbname=bandymas', 'bandymas', 'IsmokKodint333'); // rysys su db atidaromas

$res = $cnn->query("select aut_gamintojas as g, aut_modelis as m, aut_metai as mm, aut_kaina as k  from aut order by aut_kaina");

while ($row = $res->fetch()){
    echo $row['g'] . ' ' . $row['m']  . ' ' . $row['mm'] . ' ' . $row['k'] . '<br>';
}