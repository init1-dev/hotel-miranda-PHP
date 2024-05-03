<?php

    function formRoomData($roomData){
        $formatedRooms = [];
        foreach ($roomData as $room) {
            $formatedRooms[] = [
                'id' => $room['_id'],
                'name' => $room['name'],
                'photo' => $room['photo'],
                'type' => strtoupper($room['room_type']),
                'number' => $room['room_number'],
                'desc' => $room['description'],
                'offer' => $room['offer'],
                'price' => $room['offer'] 
                    ? round(($room['price'] / 100) * ( 1 - $room['discount'] / 100)) 
                    : round($room['price'] / 100),
                'cancel' => $room['cancellation'],
                'amenities' => json_decode($room['amenities'], true),
                'discount' => $room['discount']
            ];
        }
        return $formatedRooms;
    }

?>