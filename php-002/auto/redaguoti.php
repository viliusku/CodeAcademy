<?php
$auto = new cars();
$car = $auto->getCar($_POST['edit']);
var_dump($car);
?>
<form method="post" action="auto-update.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="gamintojas">Gamintojas:</label>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="">
        <label for="modelis">Modelis:</label>
        <input type="text" class="form-control" id="modelis" name="modelis" value="">
        <label for="metai">Metai:</label>
        <input type="text" class="form-control" id="metai" name="metai" value="">
        <label for="kaina">Kaina:</label>
        <input type="text" class="form-control" id="kaina" name="kaina" value="">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
    <input type="hidden" name="id" value="">
</form>