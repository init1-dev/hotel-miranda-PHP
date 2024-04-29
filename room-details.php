<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'room-details';
    $values = [
        'title' => 'Room Details'
    ];

    renderTemplate($template, $values);
?>