<?php

$s = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<data>
    <auto parduota="1">
       <gam>Honda</gam>
       <mod>Civic</mod> 
       <met>2005</met>
       <kai>2000</kai>
    </auto>
    <auto parduota="1">
       <gam>BMW</gam>
       <mod>320i</mod> 
       <met>2006</met>
       <kai>4000</kai>
    </auto>
    <auto>
       <gam>Audi</gam>
       <mod>A6</mod> 
       <met>2005</met>
       <kai>3000</kai>
    </auto>
</data>
EOT;

$xml = simplexml_load_string($s);
$x = $xml->xpath("auto");
echo '<table>';
foreach($x as $auto){
    echo '<tr>';
    echo '<td>' . $auto->gam . '</td>';
    echo '<td>' . $auto->mod . '</td>';
    echo '<td>' . $auto->met . '</td>';
    echo '<td>' . $auto->kai . '</td>';
    echo '</tr>';
}
echo '</table>';

$x = $xml->xpath("auto[gam='Honda' and kai>1000]");
echo var_dump($x);

$x = $xml->xpath("auto[@parduota='1']");
echo var_dump($x);
