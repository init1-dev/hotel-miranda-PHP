<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRoomsWithOffer.php';
    require_once __DIR__ . '/utils/queries/getPopularRooms.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';
    require_once __DIR__ . '/utils/executeQuery.php';

    $offersData = executeQuery($connection, $getRoomsWithOffer);
    $popularData = executeQuery($connection, $getPopularRooms);

    $connection->close();

    $formatedOffers = formRoomData($offersData);
    $formatedPopular = formRoomData($popularData);

    $values = [
        'offers' => $formatedOffers,
        'popular' => $formatedPopular
    ];

    renderTemplate('offers', $values);
?>