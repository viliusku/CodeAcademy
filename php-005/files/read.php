<?php

$o = fopen('write.txt', 'r');
$s = fread($o, filesize('write.txt'));
fclose($o);
echo $s;