<?php

function connect() {
    static $pdo = null;

    if ($pdo === null) {
        // User Credentials
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "boilerplate";

        $dsn = "mysql:host=$hostname;dbname=$database";
        
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}

function execute($query, $values=[]) {
    $pdo = connect();
    $stmt = $pdo->prepare($query);
    $stmt->execute($values);
    return $stmt;
}
