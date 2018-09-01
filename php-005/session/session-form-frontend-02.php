<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="session-form-backend-02.php">
    <label>Vardas:</label>
    <input type="text" name="vardas"><br>
    <label>Pavardė:</label>
    <input type="text" name="pavarde"><br>
    <button>Vykdyti</button>

    <?php
    echo "<table>";
    for ($i=0; $i<count($_SESSION['asmenys']); $i++){
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $_SESSION['asmenys'][$i]['vardas'] . "</td>";
        echo "<td>" . $_SESSION['asmenys'][$i]['pavarde'] . "</td>";
        echo "<td>" . $_SESSION['asmenys'][$i]['laikas'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</form>
</body>
</html>

