<?php
session_start();
$_SESSION['sarasas'][] = $_POST;
var_dump($_SESSION);