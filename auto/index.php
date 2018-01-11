<!--
Automobilių nuomos internetinė informacinė sistema. Naudojamos technologijos: HTML, CSS, PHP, Bootstrap, MySQL.
Pagrindinės funkcijos:
  - automobilių sąrašas
  - papildyti automobilių sąrašą
  - redaguoti automobilio aprašymą
  - pašalinti automobilį iš sąrašo
  - formuoti automobilio nuomos užsakymą
Pagrindiniai duomenys apie automobilį: nuotrauka, gamintojas, pavadinimas, metai, kaina/dienai, pastabos.
Formuojant užsakymą leisti įvesti:
  - pasirinkti miestą kur automobilį pasiimsite
  - pasirinkti miestą kur automobilį gražinsite
  - nurodyti datą kada automobilis bus paimtas
  - nurodyti kiek dienų automobilis bus naudojamas
-->
<?php include 'auto.php' ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Automobilių nuomos internetinė informacinė sistema | UAB Auto 7/24</title>

    <?php include 'auto-head-include.php' ?>

</head>
<body>

<div class="container-flex">
    <?php include 'auto-body-include.php' ?>
    <div class="mx-auto site-body">
        <table class="table table-responsive table-striped mt-1 site-car-list">
            <thead class="thead-light">
                <tr>
                    <th>Nuotrauka</th>
                    <th>Gamintojas</th>
                    <th>Modelis</th>
                    <th>Metai</th>
                    <th>Kaina</th>
                    <th>Veiksmai</th>
                </tr>
            </thead>
            <tbody>
                <form method="post" action="auto-actions.php">
                <?php
                    $auto = new auto();
                    $cars = $auto->getList();
                    $sablonas = "<tr><td class='align-middle'><img src='%s'></td><td class='align-middle'>%s</td><td class='align-middle'>%s</td><td class='align-middle'>%s</td><td class='align-middle'>%s EUR</td><td class='align-middle' style='white-space: nowrap'><button class='btn btn-danger mr-1' type='submit' name='delete' value='%s'>Pašalinti</button><button class='btn btn-info mr-1' type='submit' name='update-form' value='%s'>Pakeisti</button><button class='btn btn-success' type='submit' name='rent-form' value='%s'>Užsisakyti</button></td></tr>";
                    foreach($cars as $car){
                        echo sprintf($sablonas, 'data:'.$car['mime'].';base64,' . base64_encode($car['nuotrauka']), $car['gamintojas'], $car['modelis'], $car['metai'], $car['kaina'], $car['id'], $car['id'], $car['id']);
                    }
                ?>
                </form>
            </tbody>
            <tfoot>
                <tr><th colspan="6">Iš viso: <?php echo count($cars); ?></th></tr>
            </tfoot>
        </table>
    </div>
</div>

</body>
</html>