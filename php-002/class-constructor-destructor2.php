<?php

class a {
    const aaa = 'xxx';
    function __construct(){
        echo __CLASS__ . ' ' .  self::aaa . ' construct<br>';
    }
    function __destruct(){
        echo __CLASS__ .  ' ' . a::aaa . ' destruct<br>';
    }
}
echo '-- pries new--<br>';
$p = new a(); // egzempliorius sukuriamas: suveikia construct
echo '-- po new --<br>';
unset($p); // egzempliorius sunaikinamas: suveikia destruct
echo '-- po unset --<br>';
