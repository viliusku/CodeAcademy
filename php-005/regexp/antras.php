<?php

$s = "labas   rytas stai  ir   as"; echo $s.'<br>';
echo "pattern: /\s+/ : replace ',' : "; echo preg_replace("/\s+/", ",", $s) . '<br>';

echo "pattern: /\s+|as$/ : replace ',' : "; echo preg_replace("/\s+|as$/", ",", $s) . '<br>';

$s = "09/13/2018"; echo $s.'<br>';
echo "pattern: /^(\d{2})\/(\d{2})\/(\d{4})$/ : replace '$3-$1-$2' : "; echo preg_replace("/^(\d{2})\/(\d{2})\/(\d{4})$/", '$3-$1-$2', $s) . '<br>';
