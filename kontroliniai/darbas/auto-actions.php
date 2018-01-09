<?php

//var_dump($_POST);

if (isset($_POST['delete'])){
    include 'auto-delete.php';
}
elseif (isset($_POST['update-form'])){
    include 'auto-update-form.php';
}
elseif (isset($_POST['rent-form'])){
    include 'auto-rent-form.php';
}