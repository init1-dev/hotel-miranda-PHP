<?php

    $checkAvailability = '
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
            amenity_names.amenities AS amenities,
            room.discount,
            room.status
        FROM room
        INNER JOIN room_type ON room.room_type_id = room_type.id
        LEFT JOIN booking ON room.id = booking.room_id
        LEFT JOIN (
            SELECT room_id, JSON_ARRAYAGG(amenity.name) AS amenities
            FROM room_amenities
            LEFT JOIN amenity ON room_amenities.amenity_id = amenity.id
            GROUP BY room_id
        ) AS amenity_names ON room.id = amenity_names.room_id
        WHERE (
            booking.id IS NULL OR 
            (booking.check_in > ? OR booking.check_out <= ?)
        )
        GROUP BY
            room.id;
    ';

?>