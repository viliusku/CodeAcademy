<?php

$srv = "localhost";
$sch = "bandymas";
$usr = "bandymas";
$psw = "labas";
try {
    $cnn = new PDO("mysql:host={$srv};dbname={$sch}", $usr, $psw); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "select * froma aut"; // sql uzklausos tekstas

    $res = $cnn->query($sql); // ivydomas uzklausa ant serverio

    echo '<table>';

    while ($row = $res->fetch()) {
        echo '<tr>';
        echo '<td>' . $row['aut_id'] . '</td>';
        echo '<td>' . $row['aut_gam'] . '</td>';
        echo '<td>' . $row['aut_mod'] . '</td>';
        echo '<td>' . $row['aut_met'] . '</td>';
        echo '<td>' . $row['aut_kai'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    $res->closeCursor();
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}

