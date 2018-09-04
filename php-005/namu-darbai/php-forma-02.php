<?php session_start(); ?>
<!--
Sukurkite frontend failą su įvedimo forma. Forma turėtu turėti laukus : 3x tekstiniai laukai: Šalies pavadinimas, sostinės pavadinimas, gyventojų skaičius, 1x radio pasirinkimas: Šalies tipas vakarų, rytų. Forma turėtu būti nusiųsta į backend failą metodu POST. Duomenis patalpinkite į sesiją. Iš backend failo automatiškai nukreipti (header) į frontend failą ir ten sesijos turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="php-forma-02-backend.php">
    <label>Šalies pavadinimas:</label><input type="text" name="sapav"><br>
    <label>Sostines pavadinimas:</label><input type="text" name="sopav"><br>
    <label>Gyventoju skaicius:</label><input type="text" name="gyv"><br>
    <label>Tipas:</label><br>
    <label>Vakaru</label><input type="radio" name="tipas" value="vakaru"><br>
    <label>Rytu</label><input type="radio" name="tipas" value="rytu"><br>
    <button>Vykdyti</button>
</form>

<?php
if (isset($_SESSION['salys'])){
    echo '<table>';
    usort($_SESSION['salys'], function($a, $b){
       if ($a['gyv'] > $b['gyv']) return -1;
       elseif ($a['gyv'] < $b['gyv']) return 1;
       else 0;
    });
    $i = 0;
    foreach($_SESSION['salys'] as $salis){
        if ($i < 3) {
            echo '<tr>';
            echo '<td>' . $salis['sapav'] . '</td>';
            echo '<td>' . $salis['sopav'] . '</td>';
            echo '<td>' . $salis['gyv'] . '</td>';
            echo '<td>' . $salis['tipas'] . '</td>';
            echo '</tr>';
        } else break;
        $i++;
    }
    echo '</table>';
}
var_dump($_SESSION);
?>

</body>
</html>