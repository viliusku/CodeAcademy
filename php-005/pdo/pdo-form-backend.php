<?php

include "pdo-connect.php";
try {
    $sql = "insert into aut (aut_gam, aut_mod, aut_met, aut_kai) values(:gam, :mod, :met, :kai)";
    $res = $cnn->prepare($sql);
    $res->execute([
        ':gam' => $_POST['gam'],
        ':mod' => $_POST['mod'],
        ':met' => $_POST['met'],
        'kai' => $_POST['kai']
    ]);
    header("location: pdo-form-frontend.php");
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}