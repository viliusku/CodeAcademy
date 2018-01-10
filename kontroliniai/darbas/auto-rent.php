<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Automobilių nuomos internetinė informacinė sistema - šalinimas | UAB Auto 7/24</title>
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
<?php
include 'auto-header.php';
$car = false;
if (isset($_POST['rent'])) {
    include 'auto.php';
    $auto = new auto();
    $car = $auto->get($_POST['rent']);
    $message = $auto->message;
} else $message = 'Neleistinas veiksmas';
if ($car !== false){
    ?>
    <div class="jumbotron p-2 bg-success">
        <p style="color: white; font-size: 32px"><?php echo sprintf("Automobilis %s %s (%s m.) užsakytas", $car["gamintojas"], $car["modelis"], $car["metai"]) ?></p>
    </div>
    <table class="table border">
        <tr><td>Vardas</td><td><?php echo $_POST['vardas'] ?></td></tr>
        <tr><td>Pavardė</td><td><?php echo $_POST['pavarde'] ?></td></tr>
        <tr><td>Kaina</td><td><?php echo $car['kaina'] * $_POST['dienos'] ?> EUR</td></tr>
        <tr><td>Data</td><td><?php echo $_POST['data'] ?></td></tr>
        <tr><td>Dienų</td><td><?php echo $_POST['dienos'] ?></td></tr>
        <tr><td>Pasiimti</td><td><?php echo $_POST['pasiimti'] ?></td></tr>
        <tr><td>Atiduoti</td><td><?php echo $_POST['atiduoti'] ?></td></tr>
    </table>
    <?php
}
else {
    ?>
    <div class="jumbotron p-2 bg-danger">
        <p style="color: white; font-size: 32px"><?php echo $message ?></p>
    </div>
    <?php
}
?>
    <a href="/kontroliniai/darbas"><button class="btn">Automobilių sąrašas</button></a>
</div>
</body>
</html>
