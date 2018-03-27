<?php
include 'header.php';
include 'auto_class.php';
$auto = new cars();

if (isset($_POST['delete'])) include 'pasalinti.php';
else include 'redaguoti.php';

include 'footer.php';
?>
