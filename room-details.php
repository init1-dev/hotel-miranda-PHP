<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRoom.php';

    $query = $getRoom;

    if($stmt = $connection->prepare($query)){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } else{
            echo "Invalid 'id' param";
            exit;
        }

        $stmt->bind_param('i', $id);

        if($stmt->execute()){
            $results = $stmt->get_result();

            $row = $results->fetch_assoc();
        } else{
            echo "Error running query: " . $connection->error;
            exit;
        }

        $stmt->close();
    } else {
        echo "Unable to GET 'id' from url";
        exit;
    }

    $connection->close();

    $template = 'room-details';
    $values = [
        'title' => 'Room Details',
        'room' => $row
    ];

    renderTemplate($template, $values);
?>