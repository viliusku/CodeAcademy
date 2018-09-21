<?php

date_default_timezone_set("Europe/Vilnius");

echo "Today is " . date("Y-m-d H:i:s") . "<br>";

$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("2017-10-01 15:00:00");
echo "Created date is " . date("Y-m-d H:i:s", $d) . "<br>";

$dtx = new DateTime();
echo $dtx->format("Y-m-d H:i:s") . "<br>";

$dt1 = new DateTime('2011-01-01T15:03:01');
echo $dt1->format("Y-m-d H:i:s") . "<br>";

$dt2 = new DateTime('2011-02-01T15:04:01');
echo $dt2->format("Y-m-d H:i:s") . "<br>";

$diff = $dt2->diff($dt1);
//var_dump( $diff ) ;

echo $diff->format('%m month, %d days, %h hours, %i minutes') . '<br>';

$date = new DateTime('2018-02-28');
$date->add(new DateInterval('P1D'));
echo $date->format('Y-m-d') . "<br>";