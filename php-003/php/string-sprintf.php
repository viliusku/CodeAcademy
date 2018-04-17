<?php

$s = "%s yra %s studentas<br>";

echo sprintf($s, 'Jonas', 'KTU');
echo sprintf($s, 'Petras', 'VDU');
echo sprintf($s, 'Antanas', 'CodeAcademy');

for ($i=0; $i<20; $i++){
    echo sprintf("%03d", $i) . '<br>';
}
