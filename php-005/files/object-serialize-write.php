<?php

$o = new stdClass();
$o->a = 'abc';
$o->b = 'def';

file_put_contents('object-serialize.txt', serialize($o));
echo 'ok';