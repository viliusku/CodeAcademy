<?php

try {
    $cnn = new PDO('mysql:host=localhost;dbname=mokymai', 'root'); // rysys su db atidaromas

    $res = $cnn->prepare("insert into asmuo (asm_vardas, asm_pavarde, asm_amzius) values(:vardas,:pavarde,:amzius)");
    var_dump($_POST);
    $x = $res->execute([
        ':vardas' => $_POST['var'],
        ':pavarde' => $_POST['pav'],
        ':amzius' => $_POST['amz']
    ]);

    $sql = "select * from asmuo";

    $res = $cnn->query($sql);

    echo '<table>';

    while ($row=$res->fetch()){
        echo '<tr>';
        echo '<td>' . $row['asm_vardas'].'</td>';
        echo '<td>' . $row['asm_pavarde'].'</td>';
        echo '<td>' . $row['asm_amzius'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
}
catch(PDOException $e) {
    echo $e->getMessage();
}

echo '<a href="pdo-form-frontend.html">Grizti i forma</a>';