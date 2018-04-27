<?php
session_start();
//$_SESSION['sarasas'][] = $_POST;
//var_dump($_SESSION);
//session_unset();
//session_destroy();

class preforma {
    function add(){
        $_SESSION['sarasas'][] = $_POST;
    }
}
class forma extends preforma {
    function info(){
        echo '<table>';
        foreach ($_SESSION['sarasas'] as $asmuo) {
            echo '<tr>';
            echo '<td>' . $asmuo['vardas'] . '</td>';
            echo '<td>' . $asmuo['lytis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
$o = new forma();
$o->add();
$o->info();

echo '<a href="frontend-post-session.html">Atgal</a>';