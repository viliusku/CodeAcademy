<?php

if (file_exists('sav-php-form-02.txt')) {
    $m = json_decode(file_get_contents('sav-php-form-02.txt'), true);
}
else {
    $m = [];
}

$m[] = $_POST;
file_put_contents('sav-php-form-02.txt', json_encode($m));

header("location: sav-php-form-02-file.php");