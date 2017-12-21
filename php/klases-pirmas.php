<?php

class zmogus {
    public $vardas;
    public $pavarde;
    public $gdata;
    function info(){
       $this->vardas = 'Andrius';
       $this->pavarde = 'Andriukaitis';
       $this->gdata = '1990-12-10';
       $s = 'Vardas: %s, pavarde: %s, gimimo data: %s';
       return sprintf($s, $this->vardas, $this->pavarde, $this->gdata);
    }
}

$zm = new zmogus();
echo $zm->info() .'<br>'; // kvieciame funcija
echo $zm->vardas .'<br>'; // nuskaitome savybe
$zm->vardas = 'Tomas'; // pakeiciame savybe
echo $zm->vardas .'<br>'; // nuskaitome pakeista savybe
echo $zm->info() .'<br>'; // kvieciame funcija

class darbuotojas {
    public $vardas = 'nezinomas';
    public $pavarde = 'nezinoma';
    public $atlyginimas = 0;
    function info(){
        $s = 'Vardas: %s, pavarde: %s, atlyginimas: %s EUR';
        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }
}

$db = new darbuotojas();
echo $db->info() .'<br>'; // kvieciame funcija
$db->vardas = 'Jonas';
echo $db->info() .'<br>'; // kvieciame funcija
$db->pavarde = 'Jonaitis';
$db->atlyginimas = 1000;
echo $db->info() .'<br>'; // kvieciame funcija
var_dump($db);
var_export($db) . '<br>';
echo json_encode($db);

unset($db); // panaikiname klases egzemplioriu
//echo $db->info(); // klaida
