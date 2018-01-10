<?php
$car = false;
if (isset($_POST['rent-form'])) {
    $auto = new auto();
    $car = $auto->get($_POST['rent-form']);
    $message = $auto->message;
} else $message = 'Neleistinas veiksmas';
if ($car !== false) {
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
    <img style='width: 150px'
         src="data:<?php echo $car['mime'] ?>;base64,<?php echo base64_encode($car['nuotrauka']) ?>">
    <p><?php echo $s ?></p>
    <p><?php echo $car["pastabos"] ?></p>
    <form method="post" action="auto-rent.php">
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
            <button type="submit" class="btn btn-primary mt-1" name="rent" value="<?php echo $car["id"] ?>">Vykdyti
            </button>
        </div>
    </form>
    <?php
}
else {
    ?>
    <div class="jumbotron p-2 bg-danger">
        <p style="color: white; font-size: 32px; text-align: center"><?php echo $message ?></p>
    </div>
    <?php
}