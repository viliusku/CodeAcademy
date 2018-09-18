<?php
include 'header.php';

$items = [];
?>
<form method="POST">
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nr.</th>
                <th>Logo</th>
                <th>Pavadinimas</th>
                <th>Šalis</th>
                <th>Treneris</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $n = 1;
            foreach($items as $item){
                ?>
                <tr>
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $item['team_id'] ?></td>
                    <td><?php echo $item['team_logo'] ?></td>
                    <td><?php echo $item['team_name'] ?></td>
                    <td><?php echo $item['team_country'] ?></td>
                    <td><?php echo $item['team_coach'] ?></td>
                    <td>
                        <button class='btn btn-danger mr-1' type='submit' name='delete' value='<?php echo $item['team_id'] ?>'>Pašalinti</button>
                        <button class='btn btn-info' type='submit' name='edit' value='<?php echo $item['team_id'] ?>'>Redaguoti</button>
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
