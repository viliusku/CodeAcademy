<?php
session_start();

include "class/asmuo.php";
include "class/svecias.php";

$asmuo = new asmuo('jonas', 'jonaitis', 20);
var_dump($asmuo);

$svecias = new svecias('jonas', 'jonaitis', 20, 'mesa');
var_dump($svecias);
echo json_encode($svecias) . '<br>';
echo serialize($svecias) . '<br>';
$_SESSION['asmuo'] = serialize($svecias);
$y = unserialize($x);

$_SESSION['asmuo'] = $x;

var_dump($y);

if (isset($_SESSION['cnt'])){
    $cnt = $_SESSION['cnt'];
    $cnt++;
    $_SESSION['cnt'] = $cnt;
    // $session['cnt']++
} else $_SESSION['cnt'] = 1;
echo 'cnt: ' . $_SESSION['cnt'] . '<br>';