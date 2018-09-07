<?php include "pdo-connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="pdo-form-backend.php">
    <label>Gamintojas:</label><input type="text" name="gam"><br>
    <label>Modelis:</label><input type="text" name="mod"><br>
    <label>Metai:</label><input type="text" name="met"><br>
    <label>Kaina:</label><input type="text" name="kai"><br>
    <button>Vykdyti</button>
</form>

<?php
    echo '<table>';
    try {
        $res = $cnn->prepare("select * from aut order by aut_kai desc");
        $res->execute([]);
        $i = 1;
        while ($auto = $res->fetch()){
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $auto['aut_gam'] . '</td>';
            echo '<td>' . $auto['aut_mod'] . '</td>';
            echo '<td>' . $auto['aut_met'] . '</td>';
            echo '<td>' . $auto['aut_kai'] . '</td>';
            echo '</tr>';
            $i++;
        }
    }
    catch(PDOException $e) {
        echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
    }
    echo '</table>';
?>

</body>
</html>