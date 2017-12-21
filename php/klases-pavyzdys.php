<?php

class svecias {
    public $vardas;
    public $pavarde;
    public $maistas;
    function __construct($vardas, $pavarde, $maistas){
        $this->vardas = ucfirst(strtolower($vardas));
        $this->pavarde = ucfirst(strtolower($pavarde));
        $this->maistas = ucfirst(strtolower($maistas));
    }
    function eilute(){
        $s = '<tr>';
        $s.= '<td>' . $this->vardas . '</td>';
        $s.= '<td>' . $this->pavarde . '</td>';
        $s.= '<td>' . $this->maistas . '</td>';
        $s.= '</tr>';
        return $s;
    }
}

$sveciai = [];
$sveciai[] = new svecias('jonas', 'jOnaitis', 'zuvis');

$sveciai[] = new svecias('petras', 'petraitis', 'mesa');

$sveciai[] = new svecias('antanas', 'antanaitis', 'vegetaras');

var_dump($sveciai);

echo '<table>';
foreach($sveciai as $sv){
    echo $sv->eilute();
}
echo '</table>';