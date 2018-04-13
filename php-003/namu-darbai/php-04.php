<?php
/**
Sukurkite skaičių masyvą. Panaudodami foreach ciklą susumuokite lyginius skaičius ir paskaičiuokite šių skaičių vidurkį.  Pademonstruokite rezultatą.
 */

$m = [1,3,4,7,8,10];

$suma = 0;
$kiekis = 0;
/*
foreach($m as $e){
    if ($e % 2 == 0){
        $suma += $e;
        $kiekis++;
    }
}

for($i=0; $i<count($m); $i++){
    if ($m[$i] % 2 == 0){
        $suma += $m[$i];
        $kiekis++;
    }
}
*/
$i=0;
while( $i<count($m)){
    if ($m[$i] % 2 == 0){
        $suma += $m[$i];
        $kiekis++;
    }
    $i++;
}

echo $suma / $kiekis;