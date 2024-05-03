<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRoom.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';

    if($stmt = $connection->prepare($getRoom)){
        $id = $_GET['id'];
        $check_in = $_GET['check_in'];
        $check_out = $_GET['check_out'];

        $stmt->bind_param('i', $id);

        if($stmt->execute()){
            $results = $stmt->get_result();

            $row = $results->fetch_assoc();
        } else{
            echo "Error running query: " . $connection->error;
            exit;
        }

        $stmt->close();

        $formatedRoom = formRoomData([$row])[0];

    } else {
        echo "Unable to GET 'id' from url";
        exit;
    }

    $connection->close();

    $values = [
        'room' => $formatedRoom,
        'check_in' => $check_in,
        'check_out' => $check_out
    ];

    renderTemplate('room-details', $values);
?>