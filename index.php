<?php

include __DIR__ . '/bootstrap.php';
include __DIR__ . '/db.php';

$row = execute("SELECT * FROM users")->fetchAll();

?>

<h1><?php var_dump($row); ?></h1>