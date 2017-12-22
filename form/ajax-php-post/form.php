<?php
$post = json_decode(file_get_contents('php://input'));

$data = [
  'rc' => 1,
  'msg' => 'klaida',
  'post' => $post
];

echo json_encode($data);