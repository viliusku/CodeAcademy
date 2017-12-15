<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!-- html komentaras -->
<script>
// java script komentaras
</script>

<?php
echo 'labas'; // komentaras
/* komentaras
komentaras
*/
// kintamieji
$a = 5; // skaičius
$af = 5.6; // float
$af= 3.1e-3; // float
$b = true; // boolean
$c = "abc"; // string
$d = ['bmw', 'honda']; // masyvas
$e = new stdClass(); // objektas
$f = NULL; // nieko

function pvz_static(){
    static $a = 0; // sukurimas su pradine reiksme
    $a++; // +1
    echo $a . '<br>'; // parodymas
}
pvz_static(); // sukuriamas $a, +1, parodoma
pvz_static(); // +1, parodoma
pvz_static(); // +1, parodoma

$g = "labas";

function pvz_local(){
    //$g = "rytas";
    echo $g . "<br>";
}

pvz_local(); // bus klaida

global $h;
$h = "labas";
function pvz_global(){
    global $h;
    echo $h . "<br>";
}
pvz_global();
echo $GLOBALS['h'] . "<br>";
echo $h . " rytas" . "<br>";


echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";

eval('$s = "aaa";'); // ivykdo php koda is teksto
echo $s . "<br>";
unset($s); // panaikina
echo $s . "<br>"; // klaida

define('konst', 'labas'); // konstante
echo konst . "<br>";

// const konst = 'labas'; // sintakse klaseje

?>

</body>
</html>