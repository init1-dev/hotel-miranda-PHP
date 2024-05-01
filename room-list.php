<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRooms.php';

    $query = $getRooms;

    $results = $connection->query($query);

    $data = array();

    if($results->num_rows > 0){
        while ($row = $results->fetch_assoc()){
            $data[] = $row;
        }
    } else {
        echo "No results";
    }

    $connection->close();

    $template = 'room-list';
    $values = [
        'title' => 'Rooms List',
        'rooms' => $data
    ];

    renderTemplate($template, $values);
?>