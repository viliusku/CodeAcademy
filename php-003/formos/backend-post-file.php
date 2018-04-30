<?php

class forma {
    private $fn;
    function __construct($fn){
        $this->fn = $fn;
    }
    function add(){
        if (file_exists($this->fn)){
            $f = fopen($this->fn, 'r');
            $s = fread($f, filesize($this->fn));
            $m = json_decode($s, true);
            fclose($f);
        } else $m = [];
        $m[] = $_POST;
        $f = fopen($this->fn, 'a');
        fwrite($f, json_encode($m));
        fclose($f);
    }
    function info(){
        if (file_exists($this->fn)){
            $f = fopen($this->fn, 'r');
            $s = fread($f, filesize($this->fn));
            $m = json_decode($s, true);
            fclose($f);
        } else $m = [];

        if (count($m)>0){
            echo '<table>';
            foreach ($m as $asmuo) {
                echo '<tr>';
                echo '<td>' . $asmuo['vardas'] . '</td>';
                echo '<td>' . $asmuo['lytis'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
    }
}
$o = new forma('asmenys.txt');
$o->add();
$o->info();

echo '<a href="frontend-post-file.html">Atgal</a>';