<?php
/**
Sukurti klasę parduotuvė, ir savybę - prekės (masyvas). Sukurti metodą, kurio pagalba būtų galima įdėti prekę: pavadinimas, kaina į parduotuvę. Sukurti metodą top3, kuris gražintu tris pigiausias parduotuvėje esančias prekes.
 */

class parduotuve {
    public $prekes = [];
    function add($p, $k){
        $this->prekes[] = [
          'pavadinimas' => $p,
          'kaina' => $k
        ];
    }
    function top3(){
        usort($this->prekes, function($a, $b){
           if ($a['kaina']>$b['kaina']) return 1;
           elseif ($a['kaina']<$b['kaina']) return -1;
           else return 0;
        });
        $m = [];
        for ($i=0; $i<count($this->prekes) && $i<3; $i++){
            $m[] = $this->prekes[$i];
        }
        return $m;
    }
}

$o = new parduotuve();
$o->add('Kompiuteris', 500);
$o->add('Duona', 1);
$o->add('Sketis', 10);
$o->add('Kiausiniai', 5);
$o->add('Sviestas', 3);

$r = $o->top3();
var_dump($r);