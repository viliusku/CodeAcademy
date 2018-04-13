<?php

//http_response_code(404);
//header("HTTP/1.1 401 aaa");
function getNo(){
    static $n = 0;
    $n++;
    return $n;
}

echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';
echo 'labas';