<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRooms.php';
    require_once __DIR__ . '/utils/room/formRoomData.php';
    require_once __DIR__ . '/utils/room/getAmenity.php';

    $results = $connection->query($getRooms);

    $offersData = [];
    $popularData = [];

    if($results->num_rows > 0){
        while ($row = $results->fetch_assoc()){
            if($row['_id'] > 0 && $row['_id'] < 6){
                $popularData[] =  $row;
            }
            if($row['offer']){
                $offersData[] = $row;
            }
        }
    } else {
        echo "No offers results";
        exit;
    }

    $connection->close();

    $formatedOffers = formRoomData($offersData);
    $formatedPopular = formRoomData($popularData);

    $values = [
        'offers' => $formatedOffers,
        'popular' => $formatedPopular
    ];

    renderTemplate('offers', $values);
?>