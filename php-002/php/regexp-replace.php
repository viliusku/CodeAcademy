<?php

$s = 'labas rytas ddd rytas';
echo preg_replace("/rytas$/", 'vakaras', $s);
echo '<br>';
echo preg_replace("/[a,k,d]{3}/", '*', $s);
echo '<br>';
echo preg_replace("/(\d{4})-(\d{2})-(\d{2})/", "$2/$3/$1", "2018-10-30");