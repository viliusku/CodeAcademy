<?php
/**
Sukurti CodeAcademy klasę, kurioje yra savybė - kursų masyvas. Sukurti funkciją, kuri papildytu tą masyvą asociatyviniu kurso masyvu, kurio raktai: data, kiekis, pavadinimas. Sukurti funkciją, kuri išvestų informacija apie kursus lentele. */

class codeAcademy {
    public $kursai = [];
    function add($d, $k, $p){
        $this->kursai[] = [
          'data' => $d,
          'kiekis' => $k,
          'pava' => $p
        ];
    }
    function info(){
        echo '<table>';
        foreach($this->kursai as $ku){
            echo '<tr>';
            echo '<td>' . $ku['data'] . '</td>';
            echo '<td>' . $ku['kiekis'] . '</td>';
            echo '<td>' . $ku['pava'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new codeAcademy();
$o->add('2018-06-01', 10, 'PHP');
$o->add('2018-07-01', 15, 'Frontend');
$o->add('2018-08-01', 8, 'PHP');

$o->info();