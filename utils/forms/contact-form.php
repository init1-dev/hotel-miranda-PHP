<?php
    require_once __DIR__ . '/../connection.php';
    require_once __DIR__ . '/../executeQueryWithParams.php';
    require_once __DIR__ . '/../forms/inputsCheck.php';

    $values = [];
    foreach ($_POST as $key => $value) {
        $values[] = htmlspecialchars($value);
    };

    $isAnyNull = array_some($values, '');

    if($isAnyNull){
        http_response_code(400);
        echo "Bad Request";
        exit;
    } else {
        $query = "INSERT INTO message (full_name, phone, email, subject, stars, message) VALUES (?, ?, ?, ?, ?, ?);";

        try {
            // print_r($values);
            executeQueryWithParams($connection, $query, 'ssssis', $values);

            $connection->close();
            
        } catch (PDOException $e) {
            exit;
        }
    }
?>