<?php

include 'db.php';

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $values = [$username, $password];
    execute($query, $values);
}

?>

<form method="POST">
    Username
    <input type="text" name="username">

    Password
    <input type="text" name="password">

    <button type="submit">Register</button>
</form>