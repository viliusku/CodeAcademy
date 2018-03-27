<?php
include 'header.php';
include 'auto_class.php';
$auto = new cars();
$cars = $auto->getList();
?>
<form action="action.php" method="POST">
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nr.</th>
                <th>Gamintojas</th>
                <th>Modelis</th>
                <th>Metai</th>
                <th>Kaina, EUR</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($cars as $car){
                ?>
                <tr>
                    <td><?php echo $car['nr'] ?></td>
                    <td><?php echo $car['gamintojas'] ?></td>
                    <td><?php echo $car['modelis'] ?></td>
                    <td><?php echo $car['metai'] ?></td>
                    <td><?php echo $car['kaina'] ?></td>
                    <td>
                        <button class='btn btn-danger mr-1' type='submit' name='delete' value='<?php echo $car['id'] ?>'>Pašalinti</button>
                        <button class='btn btn-info' type='submit' name='edit' value='<?php echo $car['id'] ?>'>Redaguoti</button>
                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</form>
<?php
include 'footer.php';
?>
