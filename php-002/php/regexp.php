<?php

$s = "labas rytas";
echo preg_match("/rytas/", $s) ? 'yra' : 'nera';
echo '<br>';
echo preg_match("/rytAs/", $s) ? 'yra' : 'nera';
echo '<br>';
echo preg_match("/rytAs/i", $s) ? 'yra' : 'nera';
echo '<br>';
echo preg_match("/rytas$/", 'labas rytas') ? 'yra' : 'nera';
echo '<br>';
echo preg_match("/rytas$/", 'labas rytas ') ? 'yra' : 'nera';
echo '<br>';
echo preg_match("/rytas\s*$/", 'labas rytas ') ? 'yra' : 'nera';
echo '<br>';
echo preg_match("/^(http|ftp)/", 'ftp:\/\/') ? 'tinka' : 'netinka';