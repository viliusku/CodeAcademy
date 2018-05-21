<?php
/**
Sukurti klasę naujienos su savybe sąrašas. Sukurti metodą, kurio pagalba būtų galima patalpinti naujieną į sąrašą. Naujieną talpinti asociatyviniu masyvu: data, tekstas (tekstas turi būti vienas sakinys).
 * Sukurti metodą info, kuris: a) surūšiuotų masyvą pagal datą; b) paverstu teksto visus simbolius mažosiomis raidėmis, o pirmąją raidę - dižiąja; c) išvestu visas naujienas lentele.
 */
class naujienos {
    public $sarasas = [];
    function add($data, $tekstas){
        $this->sarasas[] = [
            'data' => $data,
            'tekstas' => $tekstas
        ];
    }
    function info(){
        usort($this->sarasas, function($a, $b){
            if ($a['data'] > $b['data']) return 1;
            elseif ($a['data'] == $b['data']) return 0;
            else return -1;
        });
        $i = 0;
        foreach($this->sarasas as $nau){
            $this->sarasas[$i]['tekstas'] = ucfirst(strtolower($this->sarasas[$i]['tekstas']));
            $i++;
        }
    }
    function info2(){
        usort($this->sarasas, function($a, $b){
            if ($a['data'] > $b['data']) return 1;
            elseif ($a['data'] == $b['data']) return 0;
            else return -1;
        });
        for($i=0; $i<count( $this->sarasas); $i++){
            $this->sarasas[$i]['tekstas'] = ucfirst(strtolower($this->sarasas[$i]['tekstas']));
        }
    }
}

$o = new naujienos();
$o->add('2018-06-01', 'laBas RYTAS');
$o->add('2018-05-01', 'laBaS VaKaras');
$o->add('2018-04-01', 'lABA DIENA');
$o->info2();
var_dump($o);