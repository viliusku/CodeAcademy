<?php
include 'header.php';
include 'euroleague_class.php';

$o = new teams("localhost", "bandymas", "bandymas", "bandymas");
$items = $o->getTeams();

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
                    <td class="text-center"><?php echo $n++ ?></td>
                    <td class="text-center"><a href="<?php echo $item['team_url'] ?>"><img src="<?php echo $item['team_logo'] ?>"></a></td>
                    <td><?php echo $item['team_name'] ?></td>
                    <td><?php echo $item['team_country'] ?></td>
                    <td><?php echo $item['team_coach'] ?></td>
                    <td  class="text-center">
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
