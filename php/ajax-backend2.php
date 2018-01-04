<?php
$post = json_decode(file_get_contents('php://input'));

$s = $post->var . ' | ' . $post->pav . ' | ' . $post->gda;

echo json_encode($s);