<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Automobilių nuomos internetinė informacinė sistema - šalinimas | UAB Auto 7/24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

    <link rel="stylesheet" href="/kontroliniai/darbas/auto.css" type="text/css">

</head>
<body>
<div class="container-flex">
    <?php include 'auto-header.php' ?>
    <div class="mx-auto site-body mt-1">
<?php
include 'auto.php';
if (isset($_POST['delete'])){
    include 'auto-delete.php';
}
elseif (isset($_POST['update-form'])){
    include 'auto-update-form.php';
}
elseif (isset($_POST['rent-form'])){
    include 'auto-rent-form.php';
}
else include 'auto-insert-form.php';
?>
    </div>
</div>
</body>
</html>