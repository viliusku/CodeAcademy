<?php

if (isset($_POST['delete'])){
    $auto = new auto();
    $ok = $auto->delete($_POST['delete']);
    if ($ok) $bg = 'bg-success'; else $bg = 'bg-danger';
    $message = $auto->message;
    $color = 'white';
}
else {
    $bg = 'bg-danger';
    $message = 'Neleistinas veiksmas';
    $color = 'red';
}
echo
'<div class="jumbotron p-2 ' . $bg . '">' .
  '<p style="color: ' . $color .'; font-size: 32px; text-align: center">' . $message . '</p>' .
'</div>';

?>
<a href="/kontroliniai/darbas"><button class="btn">Automobilių sąrašas</button></a>

