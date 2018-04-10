<?php

//global $a;
$a = 5;

function fnc(){
    //global $a;
    static $a = 0;
    $a++;
    echo $a . '<br>';
}

fnc();
fnc();
fnc();
fnc();
fnc();

define('c', 55);
echo c . '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
//c++;