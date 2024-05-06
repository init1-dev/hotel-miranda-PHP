<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRoom.php';
    require_once __DIR__ . '/utils/queries/getPopularRooms.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';
    require_once __DIR__ . '/utils/executeQuery.php';
    require_once __DIR__ . '/utils/executeQueryWithParams.php';

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $check_in = isset($_GET['check_in']) ? $_GET['check_in'] : null;
    $check_out = isset($_GET['check_out']) ? $_GET['check_out'] : null;

    $roomDetails = executeQueryWithParams($connection, $getRoom, 'i', [$id]);
    $relatedRooms = executeQuery($connection, $getPopularRooms);

    $connection->close();

    $formatedRoom = formRoomData($roomDetails);
    $formatedRelated = formRoomData($relatedRooms);

    $values = [
        'id' => $id,
        'room' => $formatedRoom,
        'related' => $formatedRelated,
        'check_in' => $check_in,
        'check_out' => $check_out
    ];

    renderTemplate('room-details', $values);
?>