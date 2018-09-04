<?php

$s = file_get_contents('write.txt');
echo $s . '<br>';

file_put_contents('write.txt', $s . ' aaa');

echo 'ok';

$page = file_get_contents('http://www.delfi.lt');
file_put_contents('delfi.txt', $page);
