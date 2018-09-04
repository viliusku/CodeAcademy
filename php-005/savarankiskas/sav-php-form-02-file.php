<!--
Sukurkite frontend failą su įvedimo forma. Forma turėtu turėti laukus : Šalies pavadinimas, gyventojų skaičius. Forma turėtu būti nusiųsta į backend failą metodu POST. Duomenis patalpinkite į failą. Iš backend failo automatiškai nukreipti (header) į frontend failą ir ten failo turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="sav-php-form-02-file-backend.php">
    <label>Šalies pavadinimas:</label><input type="text" name="sapav"><br>
    <label>Gyventoju skaicius:</label><input type="text" name="gyv"><br>
    <button>Vykdyti</button>
</form>

<?php
if (file_exists('sav-php-form-02.txt')){
    $m = json_decode(file_get_contents('sav-php-form-02.txt'), true);
    echo '<table>';
    usort($m, function($a, $b){
        if ($a['gyv'] > $b['gyv']) return -1;
        elseif ($a['gyv'] < $b['gyv']) return 1;
        else 0;
    });
    $i = 0;
    foreach($m as $salis){
        if ($i < 3) {
            echo '<tr>';
            echo '<td>' . $salis['sapav'] . '</td>';
            echo '<td>' . $salis['gyv'] . '</td>';
            echo '</tr>';
        } else break;
        $i++;
    }
    echo '</table>';
    var_dump($m);
}
?>

</body>
</html>
