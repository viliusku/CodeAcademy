<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$auto = [
  [
      'gamintojas' => 'bmw',
      'modelis' => '320i',
      'variklis' => '2.0',
      'durys' => 4,
      'metai' => 2010
  ],
    [
        'gamintojas' => 'audi',
        'modelis' => '100',
        'variklis' => '2.4',
        'durys' => 4,
        'metai' => 1990
    ],
    [
        'gamintojas' => 'honda',
        'modelis' => 'civic',
        'variklis' => '1.4',
        'durys' => 3,
        'metai' => 1996
    ]
];

function getInfo($masina){
    $s = '';
    $s .= '<td>' . $masina['gamintojas'] . '</td>';
    $s .= '<td>' . $masina['modelis'] . '</td>';
    $s .= '<td>' . $masina['variklis'] . '</td>';
    $s .= '<td>' . $masina['durys'] . '</td>';
    $s .= '<td>' . $masina['metai'] . '</td>';
    return $s;
}

?>

<table>
    <tr>
        <th>Nr</th>
        <th>Gamintojas</th>
        <th>Modelis</th>
        <th>Variklis</th>
        <th>Durys</th>
        <th>Metai</th>
    </tr>
    <?php
    $nr = 1;
    foreach($auto as $masina){
        echo '<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getInfo($masina);
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>