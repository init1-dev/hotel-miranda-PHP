<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRoomsBasic.php';

    $query = $getRoomsBasic;

    $results = $connection->query($query);

    $offersData = array();
    $popularData = array();

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
        echo "No results";
    }

    $connection->close();

    $template = 'offers';
    $values = [
        'title' => 'Hotel Miranda Offers',
        'offers' => $offersData,
        'popular' => $popularData
    ];

    renderTemplate($template, $values);
?>