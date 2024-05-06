<?php
    require_once __DIR__ . '/../connection.php';
    require_once __DIR__ . '/../executeQueryWithParams.php';
    require_once __DIR__ . '/../forms/inputsCheck.php';

    $values = [];
    foreach ($_POST as $key => $value) {
        $values[] = htmlspecialchars($value);
    }

    $isAnyNull = array_some($values, '');

    if($isAnyNull){
        http_response_code(400);
        echo "Bad request";
        exit;
    } else {
        $query = "INSERT INTO booking (check_in, check_out, full_name, phone, email, special_request, room_id) VALUES (?, ?, ?, ?, ?, ?, ?)";

        try {
            // print_r($values);
            executeQueryWithParams($connection, $query, 'ssssssi', $values);

            $connection->close();
            
        } catch (PDOException $e) {
            exit;
        }
    }

?>