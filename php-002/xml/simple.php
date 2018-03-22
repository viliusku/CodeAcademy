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
    <lubos hight="3">Aukstos</lubos>
    <lubos hight="2">Zemos</lubos>
    <lubos hight="4">
        Vidutines
         <lubos hight="5">
            xxx
        </lubos>
    </lubos>
</data>
EOT;

//echo htmlspecialchars($s);
$xml = simplexml_load_string($s);
$x = $xml->xpath("//lubos");
foreach($x as $item){
    echo $item . ' ' . $item['hight'] . "<br>";
}
echo '<hr>';
$x = $xml->xpath("lubos[@hight>2]");
foreach($x as $item){
    echo $item . ' ' . $item['hight'] . "<br>";
}

$ss = $xml->asXML();
echo htmlspecialchars($ss);
