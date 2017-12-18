<?php

$t = date("h");
var_dump($t);

if ($t >  '6') {
    echo "Have a good day!";
} else echo 'Good evening!';

echo '<br>';

$a = 6;
if ($a == 5) echo 'Lygu' . '<br>';
elseif ($a > 5) echo "daugiau<br>";
else {
    echo 'maziau';
    echo '<br>';
}