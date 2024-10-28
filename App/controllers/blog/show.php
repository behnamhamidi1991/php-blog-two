<?php

$config = require basePath('config/db.php');

$db = new Database($config);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id
];


$post = $db->query('SELECT * FROM posts WHERE id = :id', $params)->Fetch();



loadView('blog/show', [
    'post' => $post
]);