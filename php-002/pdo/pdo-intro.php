<?php

$cnn = new PDO('mysql:host=localhost;dbname=mokymai', 'root'); // rysys su db atidaromas

$sql = "select 'labas' as tekstas, count(*) as cnt from asmuo"; // sql uzklausos tekstas

$res = $cnn->query($sql); // ivydomas uzklausa ant serverio

while ($row = $res->fetch()){ // pasrsiuncia is serverio eiline rezultatu eilute (masyva)
    echo $row['cnt'].'<br>'; // isvedimas
    //echo $row[0].'<br>';
    //var_dump($row);
}

$res->closeCursor(); // rezultatu ant serverio sunaikinimas
//-----
$sql = "select * from asmuo";

$res = $cnn->query($sql);

echo '<table>';

while ($row = $res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['asm_id'].'</td>';
    echo '<td>' . $row['asm_vardas'].'</td>';
    echo '<td>' . $row['asm_pavarde'].'</td>';
    echo '<td>' . $row['asm_amzius'].'</td>';
    echo '</tr>';
}
echo '</table>';

$res->closeCursor();

