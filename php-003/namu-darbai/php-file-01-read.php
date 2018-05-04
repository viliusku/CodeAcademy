<?php
/**
Sukurti skaičių masyvą, paversti masyvą tekstu, sujungiant elementus kableliu ir įrašyti į failą. Su teksto redaktoriumi papildyti failo turinį keletu naujų skaičių. Parašyti PHP skriptą, kuris nuskaito pakeistą failą, atstato iš jo masyvą. Išvesti masyvo turinį su var_dump.
 */
$f = fopen('php-file-01.txt', 'r');
$s = fread($f, filesize('php-file-01.txt'));
fclose($f);
$m = explode(',', $s);
var_dump($m);
