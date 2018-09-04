<?php

session_start();

$_SESSION['salys'][] = $_POST;

header("location: php-forma-02.php");