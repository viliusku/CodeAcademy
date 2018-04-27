<?php
session_start();

if (isset($_SESSION['skaitliukas'])) $_SESSION['skaitliukas']++;
else $_SESSION['skaitliukas'] = 0;
echo  $_SESSION['skaitliukas'];