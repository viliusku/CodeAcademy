<?php

// skaitymas
$f = fopen('failai/tekstas.txt', 'r');
$s = fread($f, filesize('failai/tekstas.txt'));
fclose($f);

echo $s . '<br>';

$ss = 'labas vakaras';

// rasymas
$f = fopen('failai/tekstas2.txt', 'w');
fwrite($f, $ss);
fclose($f);

// rasymas su papildymu
$f = fopen('failai/tekstas2.txt', 'a');
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fclose($f);

// supaprastintas skaitymas
$s = file_get_contents('failai/tekstas2.txt');
echo $s . '<br>';
// supaprastintas rasymas
file_put_contents('failai/tekstas3.txt', 'irasyti duomenys');
// failu funkcijus
copy('failai/tekstas3.txt', 'failai/tekstas4.txt');
unlink('failai/tekstas3.txt');
if (!file_exists('failai/aaa')) mkdir('failai/aaa');
rmdir('failai/aaa');
$x = @rmdir('failai/xxx');
if ($x === false) echo 'Blogai' . '<br>';
//echo json_encode(error_get_last());
$er = error_get_last();
echo $er['message'] . '<br>';
$ar = scandir('failai');
foreach($ar as $file){
    if ($file != '.' && $file != '..') echo $file . '<br>';
}