<?php
function spalvos_kodas($spalva){
    switch($spalva){
        case 'raudona': $kodas = 'red'; break;
        case 'geltonas': $kodas = 'yellow'; break;
        case 'tamsus': $kodas = '#222222'; break;
        default: $kodas = 'black';
    }
    return $kodas;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>Lorem ipsum <span style="color:<?php echo spalvos_kodas('raudona')?>;background-color: <?php echo spalvos_kodas('geltonas')?>">dolor sit amet</span>, consectetur adipisicing elit. Accusamus cupiditate eius enim in iure <span style="color:<?php echo spalvos_kodas('geltonas') ?>">laboriosam laudantium</span> molestiae necessitatibus nesciunt nostrum nulla odio, omnis optio perspiciatis, quis reprehenderit suscipit? Accusamus, adipisci?</p>
<?php
echo '<script>alert("!");</script>';
?>

</body>
</html>
