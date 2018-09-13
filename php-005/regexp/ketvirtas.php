<?php

$userinfo = "Name: <b>John Poul</b> <br> Title: <b>PHP Guru</b>";
preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array);

var_dump($pat_array);