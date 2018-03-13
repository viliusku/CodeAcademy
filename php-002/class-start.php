<?php
class person {
    public $name;
    public $age;
    private $salary = 1000;
    public function getSalary($cur = 'EUR'){
        $x = $this->k($cur) * $this->salary;
        return $x . ' ' . $cur;
    }
    private function k($cur){
        if ($cur == 'EUR') return 1;
        else return 1.1;
    }
}

$p = new person();
$p->name = 'Jonas';
$p->age = 25;
echo $p->name .'<br>';
//echo $p->salary .'<br>';
echo $p->getSalary('USD') .'<br>';
//echo $p->k('USD') .'<br>';
var_dump($p);