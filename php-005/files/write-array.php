<?php

$m = ['a', 'b', 'c', 'd'];
$s = implode(',', $m);
file_put_contents('array.txt', $s);
echo 'ok';