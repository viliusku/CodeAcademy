<?php

$s = ' ' . uniqid();
$o = fopen('write.txt', 'a');
fwrite($o, $s, strlen($s));
fclose($o);
echo 'ok';