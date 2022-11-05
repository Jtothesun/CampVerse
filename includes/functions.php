<?php

function get_database_connection()
{
    $dsn = "mysql:dbname=campverse;host=localhost";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
    }
    catch (PDOException $exception) {
        $error_message = $exception->getMessage();
        echo $error_message;
        exit(1);
    }

    return $pdo;
}
