<?php
include 'header.php';
include 'euroleague_class.php';
if (isset($_POST['delete'])) include 'pasalinti.php';
else include 'redaguoti.php';

include 'footer.php';
?>
