<?php

function execute($query) {
    static $pdo = null;

    if ($pdo === null) {
        $hostname = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];
        $database = $_ENV['DB_NAME'];

        $dsn = "mysql:host=$hostname;dbname=$database";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo->query($query);
}
