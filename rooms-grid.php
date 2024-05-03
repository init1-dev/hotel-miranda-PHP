<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRooms.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';
    require_once __DIR__ . '/utils/executeQuery.php';

    $rooms = executeQuery($connection, $getRooms);

    $connection->close();

    $formatedRooms = formRoomData($rooms);

    $values = [
        'rooms' => $formatedRooms
    ];

    renderTemplate('rooms-grid', $values);
?>