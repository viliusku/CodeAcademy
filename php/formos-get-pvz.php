<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="get">
    <label>Gamintojas: </label><input name="gam" type="text"><br>
    <label>Modelis: </label><input name="mod" type="text"><br>
    <label>Metai: </label><input name="met" type="text"><br>
    <input type="submit" value="Vykdyti uzklausa">
</form>

<?php

class handleForm {
    public $text;
    function toText($gami, $model, $meta){
        $sablonas = "Gamintajas: %s, modelis: %s, metai: %s";
        return sprintf($sablonas, $gami, $model, $meta);
    }
}

$masina = new handleForm();
if (isset($_GET['gam']) && isset($_GET['mod']) && isset($_GET['met'])){
    echo $masina->toText($_GET['gam'], $_GET['mod'], $_GET['met']);
} else echo 'Iveskite duomenis';

?>

</body>
</html>