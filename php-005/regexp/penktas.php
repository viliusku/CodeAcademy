<?php

$userinfo = "Name: <b>John Poul</b> <br> Title: <b>PHP Guru</b>";
$x = preg_replace_callback ("/<b>(.*)<\/b>/U",  function($matches) {
    return strtoupper($matches[1]);
}, $userinfo);

var_dump($x);
