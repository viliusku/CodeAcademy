<?php

$ff = fopen('tekstai/tekstas.txt', 'w');
$s = 'labas rytas';
fwrite($ff, $s);
fclose($ff);
echo 'ok';