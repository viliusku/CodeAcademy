<?php

$m = [1, 2, 6, 8, 0];

$min = $m[0];
foreach($m as $sk){
    if ($sk < $min) $min = $sk;
}
echo $min;