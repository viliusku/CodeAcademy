<?php

class abc {
    public $a = 'a';
    public $b = 'b';
}

$o = new abc();
file_put_contents('json.txt', json_encode($o));
echo 'ok';