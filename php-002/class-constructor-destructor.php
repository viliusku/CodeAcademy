<?php
class person {
    public $name;
    public $age;
    private $salary = 1000;
    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
}
$darb = [];
$darb[] = new person('Jonas', 23, 500);
$darb[] = new person('Petras', 25, 600);
$darb[] = new person('Antanas', 27, 800);
var_dump($darb);