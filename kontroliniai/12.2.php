<?php
/*
Sukurkite PHP skriptą, kuris panaudodamas PDO objektą atliktų prisijungimą prie duomenų bazės ir įvykdytų SQL užklausą visų lentelės ‘asmenys’ duomenų apie 3 vyriausius asmenis gavimui. Rezultatus išveskite HTML lentelės forma.
*/

$cnn = new PDO('mysql:host=test.lt;dbname=test', 'test', 'test');
$res = $cnn->query('select asm_id, asm_vardas, asm_pavarde, asm_gdata from asmenys order by asm_gdata asc limit 0,3');

echo '<table>';
while ($row = $res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['asm_vardas'].'</td>';
    echo '<td>' . $row['asm_pavarde'].'</td>';
    echo '<td>' . $row['asm_gdata'].'</td>';
    echo '</tr>';
}
echo '</table>';