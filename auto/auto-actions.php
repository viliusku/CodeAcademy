<!--
Atlieka auto pašalinimą iš DB pagal ID
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

<?php
$auto = new auto();
$bg_class = "bg-success";
?>

<div class="container-flex">

    <?php include 'auto-body-include.php' ?>
    <div class="mx-auto site-body mt-1">
        <?php
            $ok = true;
            if ($auto->action == 'delete') {
                $auto = new auto();
                $ok = $auto->delete();
                if (!$ok) $bg_class = "bg-danger";
            }
            elseif ($auto->action == 'update' || $auto->action == 'insert') {
                $ok = $auto->put();
                if (!$ok) $bg_class = "bg-danger";
            }
            elseif ($auto->action === false || $auto->action == 'update-form' || $auto->action == 'rent-form' || $auto->action == 'rent') {
                switch($auto->action){
                    case 'update-form': $next_action = "update"; break;
                    case 'rent-form': $next_action = "rent"; break;
                    default: $next_action = "insert";
                }
                if ($auto->action == 'update-form' || $auto->action == 'rent-form' || $auto->action == 'rent'){
                    $car = $auto->get();
                    $ok = $car !== false;
                }
                else {
                    $car = [
                        'id' => '',
                        'gamintojas' => '',
                        'modelis' => '',
                        'metai' => '',
                        'kaina' => '',
                        'pastabos' => '',
                        'nuotrauka' => '',
                        'mime' => ''
                    ];
                    $ok = true;
                }
                if ($ok) {
                    if ($auto->action == 'update-form' || $auto->action === false){
                        if ($auto->action == 'update-form'){
                            echo sprintf("<img style='width: 150px' src='%s'>", 'data:'.$car['mime'].';base64,' . base64_encode($car['nuotrauka']));
                            $s = sprintf("Automobilio %s %s (%s m.) duomenų keitimas", $car["gamintojas"], $car["modelis"], $car["metai"]);
                        } else $s = "Naujo automobilio įvedimas";
                        ?>
                        <p><?php echo $s ?></p>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="gamintojas">Gamintojas:</label>
                                <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="<?php echo $car["gamintojas"] ?>">
                                <label for="modelis">Modelis:</label>
                                <input type="text" class="form-control" id="modelis" name="modelis" value="<?php echo $car["modelis"] ?>">
                                <label for="metai">Metai:</label>
                                <input type="text" class="form-control" id="metai" name="metai" value="<?php echo $car["metai"] ?>">
                                <label for="kaina">Kaina, EUR/dienai:</label>
                                <input type="text" class="form-control" id="kaina" name="kaina" value="<?php echo $car["kaina"] ?>">
                                <label for="pastabos">Pastabos:</label>
                                <input type="text" class="form-control" id="pastabos" name="pastabos" value="<?php echo $car["pastabos"] ?>">
                                <label for="nuotrauka">Pasirinkite nuotraukos failą:</label>
                                <input type="file"class="form-control"  name="nuotrauka" id="nuotrauka">
                                <button type="submit" class="btn btn-primary mt-1" name="<?php echo $next_action ?>"  value="<?php echo $car["id"] ?>">Vykdyti</button>
                            </div>
                        </form>
                        <?php
                    }
                    elseif ($auto->action == 'rent-form'){
                        $s = sprintf("Automobilio %s %s (%s m.) užsakymas", $car["gamintojas"], $car["modelis"], $car["metai"]);
                        $start = date('Y-m-d');
                        $effectiveDate = strtotime("+3 months", strtotime($start));
                        $stop = date("Y-m-d", $effectiveDate);

                        $period = new DatePeriod(
                            new DateTime($start),
                            new DateInterval('P1D'),
                            new DateTime($stop)
                        );
                        ?>
                        <img style='width: 150px' src="data:<?php echo $car['mime'] ?>;base64,<?php echo base64_encode($car['nuotrauka']) ?>">
                        <p><?php echo $s ?></p>
                        <p><?php echo $car["pastabos"] ?></p>
                        <form method="post">
                            <div class="form-group">
                                <label for="kaina">Kaina, EUR/dienai:</label>
                                <input type="text" class="form-control" id="kaina" value="<?php echo $car["kaina"] ?>" readonly="readonly">
                                <label for="vardas">Vardas:</label>
                                <input type="text" class="form-control" id="vardas" name="vardas">
                                <label for="pavarde">Pavardė:</label>
                                <input type="text" class="form-control" id="pavarde" name="pavarde">
                                <label for="data">Data:</label>
                                <select class="form-control" id="data" name="data">
                                    <?php
                                    foreach ($period as $date) {
                                        echo "<option value=" . $date->format("Y-m-d") . ">" . $date->format("Y-m-d") . "</option>";
                                    }
                                    ?>
                                </select>
                                <label for="dienos">Dienų:</label>
                                <select class="form-control" id="dienos" name="dienos">
                                    <option value="1">1 diena</option>
                                    <option value="2">2 dienos</option>
                                    <option value="3">3 dienos</option>
                                    <option value="4">4 dienos</option>
                                    <option value="5">5 dienos</option>
                                    <option value="6">6 dienos</option>
                                    <option value="7">7 dienos</option>
                                    <option value="8">8 dienos</option>
                                    <option value="9">9 dienos</option>
                                    <option value="10">10 dienų</option>
                                </select>
                                <label for="pasiimti">Pasiimti:</label>
                                <select class="form-control" id="pasiimti" name="pasiimti">
                                    <option value="Kaunas">Kaunas</option>
                                    <option value="Vilnius">Vilnius</option>
                                </select>
                                <label for="atiduoti">Atiduoti:</label>
                                <select class="form-control" id="atiduoti" name="atiduoti">
                                    <option value="Kaunas">Kaunas</option>
                                    <option value="Vilnius">Vilnius</option>
                                </select>
                                <button type="submit" class="btn btn-primary mt-1" name="rent"  value="<?php echo $car["id"] ?>">Vykdyti</button>
                            </div>
                        </form>
                        <?php
                    }
                }
                else {
                    ?>
                    <div class="jumbotron p-2 <?php echo $bg_class ?>">
                        <p style="color: white; font-size: 32px"><?php echo $auto->message ?></p>
                    </div>
                    <a href="/auto"><button class="btn">Automobilių sąrašas</button></a>
                    <?php
                }
            }
        if ($auto->action == 'update' || $auto->action == 'insert' || $auto->action == 'delete') {
            ?>
            <div class="jumbotron p-2 <?php echo $bg_class ?>">
                <p style="color: white; font-size: 32px"><?php echo $auto->message ?></p>
            </div>
            <a href="/auto"><button class="btn">Automobilių sąrašas</button></a>
            <?php
        }
        elseif ($auto->action == 'rent') {
            ?>
            <div class="jumbotron p-2 <?php echo $bg_class ?>">
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
            <a href="/auto"><button class="btn">Automobilių sąrašas</button></a>
            <?php
        }
        else {

        }
        ?>
    </div>
</div>

</body>
</html>