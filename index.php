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

    renderTemplate('index', $values);

    if (isset($_GET['booking']) && $_GET['booking'] === 'success') {
        echo '
            <script defer>
                swal.fire({
                    icon: "success",
                    title: "Booking ordered successfully",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        ';
    }
?>