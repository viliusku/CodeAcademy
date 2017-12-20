<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
function svecias($vardas, $pavarde, $maistas){
    return [
        'vardas' => ucfirst(strtolower($vardas)),
        'pavarde' => ucfirst(strtolower($pavarde)),
        'maistas' => ucfirst(strtolower($maistas))
    ];
}

$sv = svecias('antanas', 'anatnaitis', 'zuvis');
//print_r($sv);

$sveciai = [];

$m = svecias('jonas', 'jonaitis', 'mesa');
$raktas = strtolower($m['vardas']) . strtolower($m['pavarde']);
$sveciai[$raktas] = $m;

$m = svecias('petras', 'petraitis', 'vegetaras');
$raktas = strtolower($m['vardas']) . strtolower($m['pavarde']);
$sveciai[$raktas] = $m;

$m = svecias('antanas', 'antanaitis', 'zuvis');
$raktas = strtolower($m['vardas']) . strtolower($m['pavarde']);
$sveciai[$raktas] = $m;

ksort($sveciai);
//print_r($sveciai);

function eilute($svecias){
    //return "<tr><td>{$svecias['vardas']}</td><td>{$svecias['pavarde']}</td><td>{$svecias['maistas']}</td></tr>tr>";
    return "<tr><td>".$svecias['vardas']."</td><td>".$svecias['pavarde']."</td><td>".$svecias['maistas']."</td></tr>";
}
?>
<table>
    <?php
    foreach($sveciai as $key => $value) echo eilute($value);
    ?>
</table>

</body>
</html>