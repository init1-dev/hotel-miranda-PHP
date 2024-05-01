<?php

    $getRoom = '
        SELECT
            room.id as _id,
            room.name,
            room.photo,
            room_type.name AS room_type,
            room.room_number,
            room.description,
            room.offer,
            room.price,
            room.cancellation,
            json_arrayagg(amenity.name) as amenities,
            room.discount,
            room.status,
            room.createdAt,
            room.updatedAt
        FROM
            room
        INNER JOIN
            room_type ON room.room_type_id = room_type.id
        LEFT JOIN
            room_amenities ON room.id = room_amenities.room_id
        LEFT JOIN
            amenity ON room_amenities.amenity_id = amenity.id
        WHERE
            room.id = ?
        GROUP BY
            room.id;
    ';

?>