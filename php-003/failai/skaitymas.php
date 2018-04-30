<?php

$ff = fopen('tekstai/tekstas.txt', 'r');
$s = fread($ff, filesize('tekstai/tekstas.txt'));
fclose($ff);
echo $s;