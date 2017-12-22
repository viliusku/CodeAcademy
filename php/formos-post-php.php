<?php

/* sita masyva sukuria PHP automatiskai pagal request key/value
$_POST = [
    'vardas' => 'Jonas',
    'pavarde' => 'Jonaitis',
    'maistas' => 'mesa'
];
*/

var_export($_POST); echo '<hr>';

echo $_POST['vardas'] . '<hr>';
echo $_POST['pavarde'] . '<hr>';
echo $_POST['maistas'] . '<hr>';

foreach($_POST as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo '<a href="formos-post-html.html">Atgal</a>';