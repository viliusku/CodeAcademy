<?php

$s = "labas ,.rytas+-stai.ir,as";

$m = preg_split("/ ,\.|\+\-|\.|,/", $s);

var_dump($m);