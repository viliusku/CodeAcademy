<?php

include 'auto.php';
$auto = new auto();
$cars = $auto->getList();

?>

<!DOCTYPE html>
<html lang="lt">
<head   >
    <meta charset="UTF-8">
    <title>Automobilių nuomos internetinė informacinė sistema| UAB Auto 7/24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

    <link rel="stylesheet" href="/kontroliniai/darbas/auto.css" type="text/css">

</head>
<body>

<div class="container-flex">
    <?php include 'auto-header.php' ?>
    <div class="mx-auto site-body">
        <form action="auto-actions.php" method="POST">
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
            <?php
                foreach($cars as $car){
                   echo "<tr><td><img src=data:{$car['mime']};base64,".base64_encode($car['nuotrauka'])."></td><td>{$car['gamintojas']}</td><td>{$car['modelis']}</td><td>{$car['metai']}</td><td>{$car['kaina']}</td><td style='white-space: nowrap'>

<button class='btn btn-danger mr-1' type='submit' name='delete' value='{$car['id']}'>Pašalinti</button>
<button class='btn btn-info mr-1' type='submit' name='update-form' value='{$car['id']}'>Redaguoti</button>
<button class='btn btn-success' type='submit' name='rent-form' value='{$car['id']}'>Užsakyti</button>
</td></tr>";
                }
            ?>
            </tbody>
        </table>
        </form>
    </div>
</div>

</body>
</html>