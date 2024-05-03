<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRooms.php';

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

    $values = [
        'offers' => $offersData,
        'popular' => $popularData
    ];

    renderTemplate('offers', $values);
?>