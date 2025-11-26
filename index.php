<?php

include __DIR__ . '/bootstrap.php';
include __DIR__ . '/db.php';

?>

<div>
    <h2>Fetching a single row</h2>

    <?php 
        $query = "SELECT * FROM users WHERE username = ?";
        $values = ['aori'];
        $user = execute($query, $values)->fetch();
    ?>

    <h3><?= $user['username'] ?></h3>

</div>

<div>
    <h2>Fetching multiple rows</h2>

    <?php 
        $query = "SELECT * FROM users WHERE isAdmin = ?";
        $values = ['0'];
        $user_list = execute($query, $values)->fetchAll();
    ?>

    <ul>
        <?php foreach ($user_list as $user): ?>
            <li><?= $user['username'] ?></li>
        <?php endforeach?>
    </ul>
</div>