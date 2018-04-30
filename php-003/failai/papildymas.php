<?php

$ff = fopen('tekstai/tekstas.txt', 'a');
$s = ' stai ir as';
fwrite($ff, $s);
fclose($ff);
echo 'ok';