<?php
session_start();
echo 'cnt: ' . $_SESSION['cnt'] . '<br>';

$svecias = unserialize($_SESSION['asmuo']);

var_dump($svecias);