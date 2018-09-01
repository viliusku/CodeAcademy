<?php

session_start();

if (count($_POST)>0){
    $_SESSION['asmenys'][] = [
    'vardas' => $_POST['vardas'],
    'pavarde' => $_POST['pavarde'],
    'laikas' => date("Y-m-d H:i:s")
    ];

    usort($_SESSION['asmenys'], function($a, $b){
    if (strcmp($a['laikas'], $b['laikas']) > 0) return -1;
    elseif (strcmp($a['laikas'], $b['laikas']) < 0) return 1;
    else return 0;
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <label>Vardas:</label>
    <input type="text" name="vardas"><br>
    <label>Pavardė:</label>
    <input type="text" name="pavarde"><br>
    <button>Vykdyti</button>

    <?php
    echo "<table>";
    if (isset($_SESSION['asmenys'])) {
        for ($i = 0; $i < count($_SESSION['asmenys']); $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $_SESSION['asmenys'][$i]['vardas'] . "</td>";
            echo "<td>" . $_SESSION['asmenys'][$i]['pavarde'] . "</td>";
            echo "<td>" . $_SESSION['asmenys'][$i]['laikas'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>

</form>
</body>
</html>

