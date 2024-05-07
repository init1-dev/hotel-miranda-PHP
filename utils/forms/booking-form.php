<?php
    require_once __DIR__ . '/../connection.php';
    require_once __DIR__ . '/../executeQueryWithParams.php';
    require_once __DIR__ . '/../forms/inputsCheck.php';
    require_once __DIR__ . '/../queries/checkAvailability.php';
    require_once __DIR__ . '/../executeQueryWithParams.php';

    $values = [];
    foreach ($_POST as $key => $value) {
        $values[] = htmlspecialchars($value);
    }

    $arrival = $values[0];
    $departure = $values[1];
    $id = $values[6];

    $isAvailable = executeQueryWithParams($connection, $checkRoomAvailability, 'iss', [
        $id,
        $departure,
        $arrival
    ]);

    if(empty($isAvailable)){
        http_response_code(400);

        echo json_encode(array(
            "success" => false, 
            "message" => "Room is not available between selected dates"
        ));
        
        exit;
    } else {
        $isAnyNull = array_some($values, '');

        if($isAnyNull){
            http_response_code(400);
            echo json_encode(array("success" => false, "message" => "Bad request"));
            exit;
        } else {
            $query = "INSERT INTO booking (check_in, check_out, full_name, phone, email, special_request, room_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
            try {
                executeQueryWithParams($connection, $query, 'ssssssi', $values);
                
                echo json_encode(array(
                    "success" => true, 
                    "message" => "Booking ordered successfully"
                ));

                $connection->close();
                
            } catch (PDOException $e) {
                exit;
            }
        }   
    }
?>