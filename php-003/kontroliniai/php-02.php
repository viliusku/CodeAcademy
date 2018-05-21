<?php
/**
Sukurti klasę svečiai. Klaseje turi būti savybė - svečių sąrašas. Sukurti klasės metodą, su kuriuo būtų galima papildyti svečių sąrašą. Informacija apie svečią: vardas, lytis, patiekalas, amžius. Sukurti klasės metodą svečių sąrašui suformuoti.
 */

class sveciai {
    public $sarasas = [];
    function add($vardas, $lytis, $patiekalas, $amzius){
        $this->sarasas[] = [
          'vardas' => $vardas,
          'lytis' => $lytis,
          'patiekalas' => $patiekalas,
          'amzius' => $amzius
        ];
    }
    function info(){
        echo '<table>';
        foreach ($this->sarasas as $svecias){
            echo '<tr>';
            echo '<td>' . $svecias['vardas'] . '</td>';
            echo '<td>' . $svecias['lytis'] . '</td>';
            echo '<td>' . $svecias['patiekalas'] . '</td>';
            echo '<td>' . $svecias['amzius'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new sveciai();
$o->add('Jonas', 'vyras', 'Mėsa', 30);
$o->add('Petras', 'vyras', 'Žuvis', 35);
$o->add('Marytė', 'moteris', 'Vegetariškas', 29);
$o->info();