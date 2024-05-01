<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';
    require_once __DIR__ . '/utils/queries/getRooms.php';

    $query = $getRooms;

    if($stmt = $connection->prepare($query)){
        if(isset($_POST['arrival']) && isset($_POST['departure'])){
            $arrival = $_POST['arrival'];
            $departure = $_POST['departure'];
        }
    }

    print_r("check_in → " . $arrival);
    echo "<br>";
    print_r("check_out → " . $departure);

    // $results = $connection->query($query);

    // $data = array();

    // if($results->num_rows > 0){
    //     while ($row = $results->fetch_assoc()){
    //         $data[] = $row;
    //     }
    // } else {
    //     echo "No results";
    // }

    // $connection->close();

    // $template = 'room-list';
    // $values = [
    //     'title' => 'Rooms List',
    //     'rooms' => $data
    // ];

    // renderTemplate($template, $values);
?>