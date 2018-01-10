<form method="post" action="auto-update.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="gamintojas">Gamintojas:</label>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas">
        <label for="modelis">Modelis:</label>
        <input type="text" class="form-control" id="modelis" name="modelis">
        <label for="metai">Metai:</label>
        <input type="text" class="form-control" id="metai" name="metai">
        <label for="kaina">Kaina:</label>
        <input type="text" class="form-control" id="kaina" name="kaina">
        <label for="pastabos">Pastabos:</label>
        <textarea class="form-control" id="pastabos" name="pastabos"></textarea>
        <label for="nuotrauka">Nuotrauka:</label>
        <input type="file" class="form-control" id="nuotrauka" name="nuotrauka">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
</form>
