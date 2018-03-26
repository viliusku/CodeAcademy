<?php
include 'header.php';
include 'auto_class.php';
$auto = new cars();
$cars = $auto->getList();
?>
<table class="table table-striped table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Nr.</th>
            <th>Gamintojas</th>
            <th>Modelis</th>
            <th>Metai</th>
            <th>Kaina, EUR</th>
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
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>
<?php
include 'footer.php';
?>
