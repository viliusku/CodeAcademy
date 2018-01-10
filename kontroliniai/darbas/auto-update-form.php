<?php
$car = false;
if (isset($_POST['update-form'])){
    $auto = new auto();
    $car = $auto->get($_POST['update-form']);
}
if ($car === false){
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
}

?>
<form method="post" action="auto-update.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="gamintojas">Gamintojas:</label>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="<?php echo $car['gamintojas'] ?>">
        <label for="modelis">Modelis:</label>
        <input type="text" class="form-control" id="modelis" name="modelis" value="<?php echo $car['modelis'] ?>">
        <label for="metai">Metai:</label>
        <input type="text" class="form-control" id="metai" name="metai" value="<?php echo $car['metai'] ?>">
        <label for="kaina">Kaina:</label>
        <input type="text" class="form-control" id="kaina" name="kaina" value="<?php echo $car['kaina'] ?>">
        <label for="pastabos">Pastabos:</label>
        <textarea class="form-control" id="pastabos" name="pastabos"><?php echo $car['pastabos'] ?></textarea>
        <label for="nuotrauka">Nuotrauka:</label>
        <input type="file" class="form-control" id="nuotrauka" name="nuotrauka">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $car['id'] ?>">
</form>
