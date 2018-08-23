<?php

class abc {
    //function abc(){
    function __construct(){
        echo 'Suveike konstruktorius<br>';
    }
    function __destruct(){
        echo 'Suveike destruktorius<br>';
    }
}

echo 'start<br>';
$o = new abc();
echo ' ... tarpas<br>';
unset($o);
echo 'stop<br>';