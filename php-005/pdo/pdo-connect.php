<?php

$srv = "localhost";
$sch = "bandymas";
$usr = "bandymas";
$psw = "labas";

$cnn = new PDO("mysql:host={$srv};dbname={$sch}", $usr, $psw); // rysys su db atidaromas
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);