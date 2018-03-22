<?php
/**
 * Created by PhpStorm.
 * User: Vartotojas
 * Date: 2018-03-22
 * Time: 15:11
 */

$s = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<data>
    <lubos>Aukstos</lubos>
    <lubos>Zemos</lubos>
    <lubos>Vidutines</lubos>
</data>
EOT;

//echo htmlspecialchars($s);
$xml = simplexml_load_string($s);
$x = $xml->xpath("lubos");
foreach($x as $item){
    echo $item . "<br>";
}
