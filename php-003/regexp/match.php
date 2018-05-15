<?php

$s = '  labas           rytas';
if (preg_match("/labas/", $s)) echo 'labas surastas<br>';

if (preg_match("/laba./", $s)) echo 'laba. surastas<br>';

if (preg_match("/\s+r/", $s)) echo ' r surastas<br>';

if (preg_match("/\s{10}r/", $s)) echo ' r surastas<br>';

if (preg_match("/aaa|ry/", $s)) echo 'aaa|ry surastas<br>';

if (preg_match("/^\s*labas/", $s)) echo '^\s*labas surastas<br>';
$d = "2018-05-15";
if (preg_match("/^\d{4}-[0-9]{1,2}-\d{1,2}$/", $d)) echo "data {$d} yra teisinga<br>";
$n = '5,15';
if (preg_match("/^\d+((\.|,)\d{1,2}){0,1}$/", $n)) echo "skaicius {$n} yra teisingas";