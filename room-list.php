<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/checkAvailability.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';

    if($stmt = $connection->prepare($checkAvailability)){
        $checkArrival = isset($_GET['check_in']);
        $checkDeparture = isset($_GET['check_out']);
        
        if( $checkArrival && $checkDeparture){
            $arrival = $_GET['check_in'];
            $departure = $_GET['check_out'];
        } else{
            echo "Invalid params";
            exit;
        }

        $stmt->bind_param('ss', $departure, $arrival);

        if($stmt->execute()){
            $results = $stmt->get_result();
            $availableRooms = [];

            if($results->num_rows > 0){
                while ($row = $results->fetch_assoc()){
                    $availableRooms[] = $row;
                }
            } else {
                echo "No results";
                exit;
            }
        } else{
            echo "Error running query: " . $connection->error;
            exit;
        }

        $stmt->close();

        $formatedRooms = formRoomData($availableRooms);
        
    } else {
        echo "Unable to GET data";
        exit;
    }

    $connection->close();

    $values = [
        'rooms' => $formatedRooms,
        'arrival' => $arrival,
        'departure' => $departure
    ];
    renderTemplate('room-list', $values);
?>