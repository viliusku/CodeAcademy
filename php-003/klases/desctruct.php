<?php

class a {
    function __construct(){
      echo 'suveike konstruktorius<br>';
    }
    function __destruct(){
        echo 'suveike destruktorius<br>';
    }
}

$o = new a();
echo 'veikia programa 1<br>';
unset($o);
echo 'veikia programa 2<br>';
echo 'veikia programa 3<br>';