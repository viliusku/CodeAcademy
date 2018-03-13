<?php

class c {
    private $mas = [];
    function add($name, $age, $salary){
        $this->mas[] = [
            'name' => $name,
            'age' => $age,
            'salary' => $salary
        ];
    }
    function info(){
        return $this->mas;
    }
}

$p = new c();
$p->add('Jonas', 20, 500);
$p->add('Antanas', 21,700);
$p->add('Petras', 22, 600);
$p->add('Andrius', 23, 800);
$p->add('Vytas', 20, 550);
var_dump($p->info());