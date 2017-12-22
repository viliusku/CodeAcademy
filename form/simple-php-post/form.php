<?php

if (count($_POST)>0){
    foreach($_POST as $key => $value){
        echo "{$key}: {$value}<br>";
    }
}
echo '<a href="http://test.lt/form/simple-php-post">Form</a>';