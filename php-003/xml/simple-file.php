<?php

$xml = simplexml_load_file("auto.xml");
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
