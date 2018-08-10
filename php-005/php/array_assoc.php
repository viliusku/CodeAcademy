
<?php

    $m = [
        'gamintojas' => 'Honda',
        'modelis' => 'Civic',
        'kuras' => 'benzinas',
        'metai' => 2010,
        'kaina' => 2500
    ];

    echo $m['gamintojas'];
    var_dump($m);

    $m['kaina'] = 3000;
    $m['transmisija'] = 'automatas';
    unset($m['kuras']);

var_dump($m);