<?php

//$xml=simplexml_load_file("grupe.xml");
$s = file_get_contents('grupe.xml');
$xml = simplexml_load_string($s);
var_dump($xml);

echo 'Grupė: ' . $xml->pavadinimas . '<br>';
echo 'Dėstytojas: ' . $xml->destytojas . '<br>';
$x = $xml->xpath('mokiniai/mokinys');
var_dump($x);
echo '<ol>';
foreach($x as $mokinys){
    echo '<li>' . $mokinys->vardas . ', ' . $mokinys['id'] . '</li>';
}
echo '</ol>';

echo $xml->mokiniai->mokinys[0]->vardas;

$x = $xml->xpath("mokiniai/mokinys[apranga='Šviesi']");
var_dump($x);
$x = $xml->xpath("mokiniai/mokinys[@id='arv']");
var_dump($x);