<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/checkAvailability.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';
    require_once __DIR__ . '/utils/executeQueryWithParams.php';

    $arrival = isset($_GET['check_in']) ? $_GET['check_in'] : null;
    $departure = isset($_GET['check_out']) ? $_GET['check_out'] : null;

    $availableRooms = executeQueryWithParams($connection, $checkAvailability, 'ss', [
        $departure,
        $arrival
    ]);

    echo count($availableRooms);

    $connection->close();
    
    $formatedRooms = formRoomData($availableRooms);

    $values = [
        'rooms' => $formatedRooms,
        'arrival' => $arrival,
        'departure' => $departure
    ];
    renderTemplate('room-list', $values);
?>