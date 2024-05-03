<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRooms.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';

    $results = $connection->query($getRooms);

    $data = [];

    if($results->num_rows > 0){
        while ($row = $results->fetch_assoc()){
            $data[] = $row;
        }
    } else {
        echo "No results";
        exit;
    }

    $connection->close();

    $formatedRooms = formRoomData($data);

    $values = [
        'rooms' => $formatedRooms
    ];

    renderTemplate('rooms-grid', $values);
?>