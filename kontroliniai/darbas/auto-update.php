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
    <?php include 'auto-header.php' ?>
<?php
    include 'auto.php';
    $auto = new auto();

    $car = [
        'gamintojas' => $_POST['gamintojas'],
        'modelis' => $_POST['modelis'],
        'metai' => $_POST['metai'],
        'kaina' => $_POST['kaina'],
        'pastabos' => $_POST['pastabos']
    ];
    $ok = true;
    if (isset($_FILES["nuotrauka"]) && strlen($_FILES["nuotrauka"]['name'])>0){
        $message = 'Upload ';
        $check = getimagesize($_FILES["nuotrauka"]["tmp_name"]);
        if ($ok = $check !== false) {
            if ($ok = in_array($check["mime"], ['image/jpg', 'image/jpeg', 'image/png'])) {
                $fp = fopen($_FILES['nuotrauka']['tmp_name'], "rb");
                if ($ok = $fp !== false){
                    $car['nuotrauka'] = fread($fp, filesize($_FILES['nuotrauka']['tmp_name']));
                    $car['mime'] = $check["mime"];
                    fclose($fp);
                } else $message .= 'nesėkmingas: problema vykdant upload veiksmą';
            } else $message .= 'nesėkmingas: nuotraukos failo tipas yra neleistinas';
        } else $message .= 'nesėkmingas: nuotraukos failas nėra nuotrauka';
    }
    // $fp = fopen($_FILES['nuotrauka']['tmp_name'], "rb");
    // $car['nuotrauka'] = fread($fp, filesize($_FILES['nuotrauka']['tmp_name']));
    // fclose($fp);
    // $car['mime'] = $_FILES['nuotrauka']['type'];
    var_dump($_POST);
    var_dump($_FILES);
    var_dump($car);
    exit;

    if ($ok){
        $ok = $auto->insert($car);
        if ($ok) $bg = 'bg-success'; else $bg = 'bg-danger';
        $message = $auto->message;
    }
    echo
        '<div class="jumbotron p-2 ' . $bg . '">' .
        '<p style="color: white; font-size: 32px; text-align: center">' . $message . '</p>' .
        '</div>';

?>
    <a href="/kontroliniai/darbas"><button class="btn">Automobilių sąrašas</button></a>

</div>
</body>
</html>