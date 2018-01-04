<?php
/*
Sukurkite HTML dokumentą 11.2-frontend.html su įvedimo formą. Forma turėtu turėti laukus : 3x tekstiniai laukai: Vardas, Pavardė, Gimimo data. Forma turėtu būti nusiųsta į 11.2-backend.php failą metodu POST. 11.2-backend.php faile PDO pagalba įrašykite duomenis į duomenų bazės lentelę 'asmenys'. Backend faile įdėkite nuorodą (linką) į įvedimo formos html dokumentą.
*/

$cnn = new PDO('mysql:host=test.lt;dbname=test', 'test', 'test');
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

$sql = "insert into asmenys (asm_vardas, asm_pavarde, asm_gdata) values(:vardas, :pavarde, :gdata)";
$res = $cnn->prepare($sql);
$res->execute([':vardas' => $_POST['vardas'], ':pavarde' => $_POST['pavarde'], ':gdata' => $_POST['gdata']]);
var_dump($_POST);
?>
<a href="11.2-frontend.html">Į įvedimo formą</a>
