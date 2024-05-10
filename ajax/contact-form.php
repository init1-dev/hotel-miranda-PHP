<?php
    require_once __DIR__ . '/../utils/connection.php';
    require_once __DIR__ . '/../utils/executeQueryWithParams.php';
    require_once __DIR__ . '/../utils/forms/inputsCheck.php';

    $values = [];
    foreach ($_POST as $key => $value) {
        $values[] = htmlspecialchars($value);
    };

    $isAnyNull = array_some($values, '');

    if($isAnyNull){
        http_response_code(400);

        echo json_encode(array(
            "success" => false, 
            "message" => "Bad request"
        ));
        
        exit;
    } else {
        $query = "INSERT INTO message (full_name, phone, email, subject, stars, message) VALUES (?, ?, ?, ?, ?, ?);";

        try {
            executeQueryWithParams($connection, $query, 'ssssis', $values);

            echo json_encode(array(
                "success" => true, 
                "message" => "Form submitted successfully"
            ));

            $connection->close();
            
        } catch (PDOException $e) {
            exit;
        }
    }
?>