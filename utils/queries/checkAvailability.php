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
            (
                SELECT JSON_ARRAYAGG(amenity.name) 
                FROM room_amenities 
                LEFT JOIN amenity ON room_amenities.amenity_id = amenity.id 
                WHERE room_amenities.room_id = room.id
            ) AS amenities,
            room.discount,
            room.status
        FROM room
        INNER JOIN room_type ON room.room_type_id = room_type.id
        WHERE NOT EXISTS (
            SELECT 1
            FROM booking
            WHERE room.id = booking.room_id
            AND (
                booking.check_in <= ?
                AND booking.check_out >= ?
            )
        )
        GROUP BY room.id;
    ';

    $checkRoomAvailability = '
        SELECT 
            room.id as _id
        FROM room
        WHERE room.id = ? AND
        (
            SELECT COUNT(*)
            FROM booking
            WHERE booking.room_id = room.id
            AND (
                booking.check_in <= ?
                AND booking.check_out >= ?
            )
        ) = 0;
    ';

?>