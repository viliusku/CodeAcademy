<?php

function automatas($pinigai, $pavadinimas){
    $prekes = [
      'coca' => 1,
      'mineralinis' =>  0.5,
      'traskuciai' => 0.75,
      'sprite' => 1.2
    ];
    if (isset($prekes[$pavadinimas])){
        $preke = $prekes[$pavadinimas];
        if($pinigai >= $preke){
            // prekes iskrenta pro skyle
            if ($pinigai == $preke){
                echo ('pasiimkite preke');
            }
            else {
                echo 'pasiimkite preke ir graza';
            }
            return $preke;
        }
        else {
            echo 'per mazai pinigu';
            return $pinigai;
        }
    }
    else {
        echo 'nera tokios prekes';
        return $pinigai;
    }
}

// ateina petras ir reikia koka kolos

$maiselis = automatas(1, 'coca');
$fnc = automatas;

echo $preke;