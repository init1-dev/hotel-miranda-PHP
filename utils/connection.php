<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();

    $db_server = $_ENV['DB_SERVER'];
    $db_username = $_ENV['DB_USERNAME'];
    $db_password = $_ENV['DB_PASSWORD'];
    $db_name = $_ENV['DB_NAME'];

    try {
        $connection = new mysqli($db_server, $db_username, $db_password, $db_name);

        if ($connection->connect_error) {
            throw new Exception("Connection failed: " . $connection->connect_error);
        }
        // echo "Connected successfully";
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>