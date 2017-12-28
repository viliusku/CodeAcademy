<?php

session_start();

if (!isset($_SESSION['postoinfo'])) $_SESSION['postoinfo'] = [];

$p = ['kodas' => '123456', 'pavadinimas' => 'Mango', 'tipas' => 'bronzinis'];

$_SESSION['postoinfo'][] = $p;

