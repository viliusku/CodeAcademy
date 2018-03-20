<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris automobilius, kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose  masyvuose turi būti laukeliai: gamintojas, modelis, pagaminimo metai, galingumas.
*/

$auto = [
    ['gamintojas' => 'BMW', 'modelis' => '320', 'pagaminimo metai' => 2000, 'galingumas' => 150],
    ['gamintojas' => 'VW', 'modelis' => 'Passat', 'pagaminimo metai' => 2006, 'galingumas' => 280],
    ['gamintojas' => 'Honda', 'modelis' => 'Fit', 'pagaminimo metai' => 2007, 'galingumas' => 111]
];

var_dump($auto);