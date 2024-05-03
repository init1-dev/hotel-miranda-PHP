<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRoom.php';
    require_once __DIR__ . '/utils/queries/getRoomsLimit.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';

    $results = $connection->query($getRoomsLimit);

    $stmt = $connection->prepare($getRoom);

    $id = $_GET['id'];
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];

    $stmt->bind_param('i', $id);
    $stmt->execute();
    
    $roomResults = $stmt->get_result();
    $room = $roomResults->fetch_assoc();
    $stmt->close();
    $connection->close();

    $relatedData = [];
    
    if($results->num_rows > 0){
        while ($row = $results->fetch_assoc()){
            $relatedData[] =  $row;
        }
    } else {
        echo "No results";
        exit;
    }

    $formatedRoom = formRoomData([$room])[0];
    $formatedRelated = formRoomData($relatedData);

    $values = [
        'room' => $formatedRoom,
        'related' => $formatedRelated,
        'check_in' => $check_in,
        'check_out' => $check_out
    ];

    renderTemplate('room-details', $values);
?>