<?php
$auto = new cars();
if (isset($_POST['edit'])){
    $car = $auto->getCar($_POST['edit']);
    $url = 'redaguoti-vykdymas.php';
}
else {
    $car = [
        'id'=> '',
        'gamintojas' => '',
        'modelis' => '',
        'metai' => '',
        'kaina' => ''
    ];
    $url = 'sukurti-vykdymas.php';
}
?>
<form method="post" action="<?php echo $url ?>">
    <div class="form-group">
        <label for="gamintojas">Gamintojas:</label>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="<?php echo $car['gamintojas'] ?>">
        <label for="modelis">Modelis:</label>
        <input type="text" class="form-control" id="modelis" name="modelis" value="<?php echo $car['modelis'] ?>">
        <label for="metai">Metai:</label>
        <input type="text" class="form-control" id="metai" name="metai" value="<?php echo $car['metai'] ?>">
        <label for="kaina">Kaina:</label>
        <input type="text" class="form-control" id="kaina" name="kaina" value="<?php echo $car['kaina'] ?>">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $car['id'] ?>">
</form>