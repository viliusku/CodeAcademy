<?php
/**
Sukurti klasę, kurioje yra įmonės akcininkų sąrašas. Sukurti metodą, kurio pagalba galima į sąrašą įvesti įmonės akcininkų duomenis: vardas, pavardė, akcijų skaičius. Akcininkų sąrašą surūšiuoti pagal turimų akcijų skaičių mažėjančia tvarka. Sukurti metodą, kuris išvestu akcininikų sąrašą: vardas, pavardė, turimų akcijų kiekis procentais nuo visų akcijų skaičiaus. Pademonstruoti veikimą.
 */

class akc {
    public $sar = [];
    function add($va, $pa, $sk){
        $this->sar[] = [
          'va' => $va,
          'pa' => $pa,
          'sk' => $sk
        ];
        usort($this->sar, function($a, $b){
           if ($a['sk'] > $b['sk']) return -1;
           elseif ($a['sk'] < $b['sk']) return 1;
           else 0;
        });
    }
    function info(){
        $sum = 0;
        foreach($this->sar as $a){
            $sum += $a['sk'];
        }
        echo '<table>';
        foreach($this->sar as $a){
            echo '<tr>';
            echo '<td>' . $a['va'] . '</td>';
            echo '<td>' . $a['pa'] . '</td>';
            echo '<td>' . round(($a['sk'] / $sum) * 100, 0) . '%</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new akc();
$o->add('Jonas', 'Jonaitis', 70);
$o->add('Petras', 'Petraitis', 200);
$o->add('Antanas', 'Antanaitis', 30);
var_dump($o);
$o->info();