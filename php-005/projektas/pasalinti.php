<?php
$auto = new cars();
$result = $auto->delCar($_POST['delete']);
if ($result) header('location: /php-002/auto/sarasas.php');
else {
    ?>
    <div class="jumbotron p-2 bg-danger">
        <p style="color: white; font-size: 32px; text-align: center">
            <?php echo $auto->message ?>
        </p>
    </div>
    <?php
}